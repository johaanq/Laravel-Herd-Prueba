<?php

namespace App\Console\Commands;

use Illuminate\Console\GeneratorCommand;

class MakeDtoCommand extends GeneratorCommand
{
    protected $signature = 'make:dto {name}';

    protected $description = 'Crea una nueva clase de Dto';

    protected $type = 'DTO';

    protected function getStub()
    {
        return base_path('stubs/dto.stub');
    }


    protected function getDefaultNamespace($rootNamespace)
    {
        return $rootNamespace . '\DTOs';
    }
}
