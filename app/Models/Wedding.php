<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wedding extends Model
{
    use HasFactory;

    protected $fillable = [
        'groom_name',
        'groom_last_name',
        'bride_last_name',
        'wedding_date',
        'ceremony_schedule',
        'reception_schedule',
        'reception_type',
        'ceremony_adress',
        'ceremony_location',
        'reception_adress',
        'reception_location',
        'dresscode',
        'dresscode_notes',
    ];
}
