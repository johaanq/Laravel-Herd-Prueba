<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Areas extends Model
{
    protected $fillable = ['area_id', 'division_id', 'area_name', 'area_color'];
}
