<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Practitioners extends Model
{
    protected $fillable = [
        'practitioner_id',
        'area_id',
        'division_id',
        'general_id',
        'turn_id',
        'profile_id',
        'practitioner_extra_days',
        'practitioner_status',
        'practitioner_date_start',
        'practitioner_date_end',
        'practitioner_observation',
        'practitioner_image_link',
        'practitioner_agreement_link',
        'practitioner_curriculum_link',
        'practitioner_documents_link',
    ];
}
