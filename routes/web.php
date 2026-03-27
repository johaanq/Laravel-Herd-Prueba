<?php

use App\Http\Controllers\PractitionerController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/partitioner/time', [PractitionerController::class, 'getTime']);
Route::get('/partitioner/promedio', [PractitionerController::class, 'getPromedio']);


