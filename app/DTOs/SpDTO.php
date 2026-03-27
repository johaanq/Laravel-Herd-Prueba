<?php

namespace App\DTOs;

// use Symfony\Component\HttpFoundation\Request;
use Illuminate\Http\Request;


class SpDTO {
    public function __construct(
        public readonly int $divisionId,
        public readonly int $areaId,
        public readonly string $fechaFin,
        public readonly string $fechaInicio,
    )
    {
    }

    public static function fromRequest(Request $request): self {
        return new self(
            divisionId: (int) $request->query('division_id'),
            areaId: (int) $request->query('area_id'),
            fechaFin: $request->query('fecha_fin'),
            fechaInicio: $request->query('fecha_inicio'),
        );
    }
}
