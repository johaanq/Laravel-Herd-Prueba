<?php

namespace App\Console\Commands\Intranet;

use Illuminate\Console\GeneratorCommand;

class IntranetMakeDtoCommand extends GeneratorCommand
{
    protected $signature = 'intranet:make:dto {name}';

    protected $description = 'Crea un DTO en app/DTOs a partir de stubs/intranet/dto.stub';

    protected $type = 'DTO';

    protected function getStub(): string
    {
        return base_path('stubs/intranet/dto.stub');
    }

    protected function getDefaultNamespace($rootNamespace): string
    {
        return $rootNamespace.'\DTOs';
    }
}
