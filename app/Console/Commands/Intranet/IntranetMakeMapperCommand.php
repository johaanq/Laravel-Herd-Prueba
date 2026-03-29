<?php

namespace App\Console\Commands\Intranet;

use Illuminate\Console\GeneratorCommand;

class IntranetMakeMapperCommand extends GeneratorCommand
{
    protected $signature = 'intranet:make:mapper {name}';

    protected $description = 'Crea un Mapper en app/Mappers a partir de stubs/intranet/mapper.stub';

    protected $type = 'Mapper';

    protected function getStub(): string
    {
        return base_path('stubs/intranet/mapper.stub');
    }

    protected function getDefaultNamespace($rootNamespace): string
    {
        return $rootNamespace.'\Mappers';
    }
}
