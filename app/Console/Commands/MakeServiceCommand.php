<?php

namespace App\Console\Commands;

use Illuminate\Console\GeneratorCommand;

class MakeServiceCommand extends GeneratorCommand
{
    // Comando para la terminal
    protected $signature = 'make:service {name}';

    // La descripcion que sale en php artisan list
    protected $description = 'Crea una nueva clase de Servicio';

    // Tipo de archivo
    protected $type = 'Service';

    // Donde esta la plantilla
    protected function getStub()
    {
        return base_path('stubs/service.stub');
    }

    // Carpeta por defecta de la creacion
    protected function getDefaultNamespace($rootNamespace)
    {
        return $rootNamespace . '\Services';
    }
}

// use Illuminate\Console\Attributes\Description;
// use Illuminate\Console\Attributes\Signature;
// use Illuminate\Console\Command;

// #[Signature('app:make-service-command')]
// #[Description('Command description')]
// class MakeServiceCommand extends Command
// {
//     /**
//      * Execute the console command.
//      */
//     public function handle()
//     {
//         //
//     }
// }
