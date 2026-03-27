<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Conexion_times extends Model
{
    protected $fillable = [
        'conexion_id',
        'practitioner_id',
        'conexion_chanel_voice',
        'conexion_device',
        'conexion_ip',
        'conexion_useragent',
        'conexion_platform',
        'conexion_usertime',
        'conexion_checkintime',
        'conexion_checkouttime',
        'conexion_status',
        'conexion_parcialtime',
    ];
}
