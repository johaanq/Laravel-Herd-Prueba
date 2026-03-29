<?php

namespace App\Console\Commands\Intranet;

use Illuminate\Console\GeneratorCommand;

class IntranetMakeRequestCommand extends GeneratorCommand
{
    protected $signature = 'intranet:make:request {name}';

    protected $description = 'Crea un FormRequest en app/Http/Requests a partir de stubs/intranet/form_request.stub';

    protected $type = 'FormRequest';

    protected function getStub(): string
    {
        return base_path('stubs/intranet/form_request.stub');
    }

    protected function getDefaultNamespace($rootNamespace): string
    {
        return $rootNamespace.'\Http\Requests';
    }
}
