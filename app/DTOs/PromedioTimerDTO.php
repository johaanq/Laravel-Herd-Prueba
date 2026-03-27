<?php

namespace App\DTOs;

use Illuminate\Http\Request;

class PromedioTimerDTO{
    public function __construct(
        public readonly string $fechaInicio,
        public readonly string $fechaFin,
        public readonly int $id,
    )
    {
    }

    public static function fromRequest(Request $request): self {
        return new self(
            fechaInicio: $request->query('fecha_inicio'),
            fechaFin: $request->query('fecha_fin'),
            id: (int) $request->query('id'),
        );
    }
}
