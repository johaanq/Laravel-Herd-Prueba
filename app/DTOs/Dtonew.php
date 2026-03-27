<?php

namespace App\DTOs;

use Illuminate\Http\Request;

class Dtonew
{
    public function __construct(
        // public readonly string $ejem
    ){}


    public static function fromRequest(Request $request): self
    {
        // $validated = $request->validate([
        //    ejem => 'required|string'
        //])

        return new self(
            // ejem: $request->query('ejemplo')
            // ejem: $validated['ejem]
        );
    }
}
