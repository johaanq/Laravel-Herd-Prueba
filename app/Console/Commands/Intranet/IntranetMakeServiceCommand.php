<?php

namespace App\Console\Commands\Intranet;

use Illuminate\Console\GeneratorCommand;

class IntranetMakeServiceCommand extends GeneratorCommand
{
    protected $signature = 'intranet:make:service {name}';

    protected $description = 'Crea una clase de servicio en app/Services a partir de stubs/intranet/service.stub';

    protected $type = 'Service';

    protected function getStub(): string
    {
        return base_path('stubs/intranet/service.stub');
    }

    protected function getDefaultNamespace($rootNamespace): string
    {
        return $rootNamespace.'\Services';
    }
}
