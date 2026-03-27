<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Voice_activity extends Model
{
    protected $fillable = [
        'voice_id',
        'practitioner_id',
        'discord_username',
        'activity_type',
        'start_time',
        'end_time',
        'channel',
        'voice_status',
    ];
}
