<?php

namespace App\DTOs;

use Illuminate\Http\Request;

class NewDTo
{
    public function __construct(
        // public readonly string $ejem
    ){}


    public static function fromRequest(Request $request): self
    {
        return new self(
            // ejem: $request->query('ejemplo')
        );
    }
}
