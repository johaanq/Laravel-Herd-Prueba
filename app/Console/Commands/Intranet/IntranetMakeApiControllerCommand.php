<?php

namespace App\Console\Commands\Intranet;

use Illuminate\Console\GeneratorCommand;

class IntranetMakeApiControllerCommand extends GeneratorCommand
{
    protected $signature = 'intranet:make:api-controller {name}';

    protected $description = 'Crea un controlador en app/Http/Controllers a partir de stubs/intranet/api_controller.stub';

    protected $type = 'Controller';

    protected function getStub(): string
    {
        return base_path('stubs/intranet/api_controller.stub');
    }

    protected function getDefaultNamespace($rootNamespace): string
    {
        return $rootNamespace.'\Http\Controllers';
    }
}
