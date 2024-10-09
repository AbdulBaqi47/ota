<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

class GenerateService extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:service {name}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'This command will be used for generating service and its contract';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $name = $this->argument('name');
        $serviceName = $this->getServiceClassName($name);
        $contractName = $this->getContractClassName($name);
        $servicePath = app_path("Services/{$serviceName}.php");
        $contractPath = app_path("Services/Contracts/{$contractName}.php");

        $this->makeDirectory($servicePath);
        $this->makeDirectory($contractPath);

        $this->createService($servicePath, $serviceName, $contractName);
        $this->createContract($contractPath, $contractName);

        $this->info("Service and contract created successfully.");

        $this->updateTenancyServiceProvider($contractName, $serviceName);

        $this->info("TenancyServiceProvider updated successfully.");
    }

    protected function getServiceClassName($name)
    {
        return ucfirst($name) . 'Service';
    }

    protected function getContractClassName($name)
    {
        return ucfirst($name) . 'ServiceContract';
    }

    protected function makeDirectory($path)
    {
        if (!File::isDirectory(dirname($path))) {
            File::makeDirectory(dirname($path), 0755, true, true);
        }
    }

    protected function createService($path, $serviceName, $contractName)
    {
        $stub = file_get_contents(__DIR__ . '/stubs/Service.stub');
        $stub = str_replace('{{class}}', $serviceName, $stub);
        $stub = str_replace('{{contract}}', $contractName, $stub);

        file_put_contents($path, $stub);
    }

    protected function createContract($path, $contractName)
    {
        $stub = file_get_contents(__DIR__ . '/stubs/ServiceContract.stub');
        $stub = str_replace('{{class}}', $contractName, $stub);

        file_put_contents($path, $stub);
    }

    protected function updateTenancyServiceProvider($contractName, $serviceName)
    {
        $tenancyServiceProviderPath = app_path('Providers/TenancyServiceProvider.php');
        $tenancyServiceProviderContent = file_get_contents($tenancyServiceProviderPath);

        $comment = "// Bind the service's contracts with their implementations";
        $bindingCode = "\$this->app->bind('App\Services\Contracts\\{$contractName}', 'App\Services\\{$serviceName}');";

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

        $useStatement = "use {$contractName};\nuse App\Services\\{$serviceName};";
        if (strpos($tenancyServiceProviderContent, $useStatement) === false) {
            $useStatement = "use App\Services\Contracts\\{$contractName};\n" . $useStatement;
            $tenancyServiceProviderContent = str_replace("use Illuminate\Support\Facades\Schema;", $useStatement . "\nuse Illuminate\Support\Facades\Schema;", $tenancyServiceProviderContent);
        }

        file_put_contents($tenancyServiceProviderPath, $tenancyServiceProviderContent);
    }
}
