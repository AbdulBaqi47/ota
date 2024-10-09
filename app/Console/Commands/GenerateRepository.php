<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

class GenerateRepository extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:repo {name}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'This command will be used for generating repository and its contract';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $name = $this->argument('name');
        $repositoryName = $this->getRepositoryClassName($name);
        $contractName = $this->getContractClassName($name);
        $repositoryPath = app_path("Repositories/{$repositoryName}.php");
        $contractPath = app_path("Repositories/Contracts/{$contractName}.php");

        $this->makeDirectory($repositoryPath);
        $this->makeDirectory($contractPath);

        $this->createRepository($repositoryPath, $repositoryName, $contractName);
        $this->createContract($contractPath, $contractName);

        $this->info("Repository and contract created successfully.");

        $this->updateTenancyServiceProvider($contractName, $repositoryName);

        $this->info("TenancyServiceProvider updated successfully.");
    }

    protected function getRepositoryClassName($name)
    {
        return ucfirst($name) . 'Repository';
    }

    protected function getContractClassName($name)
    {
        return ucfirst($name) . 'RepositoryContract';
    }

    protected function makeDirectory($path)
    {
        if (!File::isDirectory(dirname($path))) {
            File::makeDirectory(dirname($path), 0755, true, true);
        }
    }

    protected function createRepository($path, $repositoryName, $contractName)
    {
        $stub = file_get_contents(__DIR__ . '/stubs/Repository.stub');
        $stub = str_replace('{{class}}', $repositoryName, $stub);
        $stub = str_replace('{{contract}}', $contractName, $stub);

        file_put_contents($path, $stub);
    }

    protected function createContract($path, $contractName)
    {
        $stub = file_get_contents(__DIR__ . '/stubs/RepositoryContract.stub');
        $stub = str_replace('{{class}}', $contractName, $stub);

        file_put_contents($path, $stub);
    }

    protected function updateTenancyServiceProvider($contractName, $repositoryName)
    {
        $tenancyServiceProviderPath = app_path('Providers/TenancyServiceProvider.php');
        $tenancyServiceProviderContent = file_get_contents($tenancyServiceProviderPath);

        $comment = "// Bind the repositories' contracts with their implementations";
        $bindingCode = "\$this->app->bind('App\Repositories\Contracts\\{$contractName}', 'App\Repositories\\{$repositoryName}');";

        // Find the position of the comment
        $commentPosition = strpos($tenancyServiceProviderContent, $comment);

        if ($commentPosition !== false) {
            // Insert the binding code after the comment
            $insertPosition = $commentPosition + strlen($comment) + 1;
            $tenancyServiceProviderContent = substr($tenancyServiceProviderContent, 0, $insertPosition) . "\n        " . $bindingCode . "\n" . substr($tenancyServiceProviderContent, $insertPosition);
        } else {
            // Comment not found, append the binding code at the end of the register method
            $registerMethod = "public function register()\n    {";
            $tenancyServiceProviderContent = str_replace($registerMethod, $registerMethod . "\n        " . $bindingCode, $tenancyServiceProviderContent);
        }

        file_put_contents($tenancyServiceProviderPath, $tenancyServiceProviderContent);
    }
}
