<?php
namespace App\Http\Controllers;

use App\DTOs\PromedioTimerDTO;
use App\DTOs\SpDTO;
use App\Services\SpService;
use Illuminate\Http\Request;


class PractitionerController extends Controller {
    // protected $spService;

    public function __construct(protected SpService $service)
    {
    }

    public function getTime(Request $request){
        // $divisionId = $request->query('division_id');
        // $areaId = $request->query('area_id');
        // $fechaInicio = $request->query('fecha_inicio');
        // $fechaFin = $request->query('fecha_fin');


        // $totalTiempo = $this->service->getTimeBetweenDate(
        //     (int)$divisionId,
        //     (int)$areaId,
        //     $fechaFin,
        //     $fechaInicio,
        // );

        $dto = SpDTO::fromRequest($request);

        $totalTiempo = $this->service->getTimeBetweenDate($dto);

        return response()->json([
            'status' => 'success',
            'data' => $totalTiempo
        ], 200);
    }

    public function getPromedio(Request $request){
        $dto = PromedioTimerDTO::fromRequest($request);

        $data = $this->service->getPromedioPractitioner($dto);

        return response()->json(
            [
                'success' => true,
                'data' => $data
            ], 200
        );

    }
}
