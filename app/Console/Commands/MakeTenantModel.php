<?php
namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Str;

class MakeTenantModel extends Command
{
    protected $signature = 'make:tenant-model {name}';
    protected $description = 'Create a new tenant model, migration, and controller';

    public function handle()
    {
        $name = Str::studly($this->argument('name')); // Convert to proper class name
        $modelPath = "App\\Models\\Tenant\\$name";
        $migrationName = 'create_' . Str::snake(Str::pluralStudly($name)) . '_table';
        $controllerPath = "App\\Http\\Controllers\\Tenant\\{$name}Controller";

        // Generate the model with migration
        Artisan::call("make:model Tenant/{$name} -m");

        // Generate the controller
        Artisan::call("make:controller Tenant/Admin/{$name}Controller --resource");

        // Move the migration file to the tenant folder
        $migrationFiles = glob(database_path("migrations/*.php"));
        $latestMigrationFile = end($migrationFiles); // Get the latest created migration file

        if ($latestMigrationFile) {
            $newPath = database_path("migrations/tenant/" . basename($latestMigrationFile));
            rename($latestMigrationFile, $newPath);
            $this->info("✅ Migration moved to tenant folder: " . basename($latestMigrationFile));
        }

        // Update the model to include UsesTenantConnection and SoftDeletes
        $modelFile = app_path("Models/Tenant/{$name}.php");
        if (file_exists($modelFile)) {
            file_put_contents($modelFile, str_replace(
                "use HasFactory;",
                "use HasFactory, SoftDeletes, Notifiable",
                file_get_contents($modelFile)
            ));
            $this->info("✅ Model updated with SoftDeletes.");
        }

        $this->info("🎉 Tenant Model, Migration, and Controller Created Successfully!");
    }
}
