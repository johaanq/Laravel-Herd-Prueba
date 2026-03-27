<?php

namespace App\Services;

use App\DTOs\PromedioTimerDTO;
use App\DTOs\SpDTO;
use Illuminate\Support\Facades\DB;

class SpService{

    // SPs creados en una bd local

    public function getTimeBetweenDate(SpDTO $dto): ?float{
        $result = DB::select('CALL sp_get_time_practitioner(?,?,?,?)', [
            $dto->divisionId,
            $dto->areaId,
            $dto->fechaFin,
            $dto->fechaInicio,
        ]);

        if(empty($result)){
            return 0.0;
        }

        return (float) $result[0]->total_tiempo;
    }

    public function getPromedioPractitioner(PromedioTimerDTO $dto): array {
        $result = DB::select('CALL filto_resumen_pc_V2(?,?,?)', [
            $dto->fechaInicio,
            $dto->fechaFin,
            $dto->id,
        ]);

        if(empty($result)){
            return [];
        }

        return $result;
    }

}
