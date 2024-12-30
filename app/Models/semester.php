<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class semester extends Model
{
    protected $fillable = [
        'scholarship_id',
        'semester_no',
        'semester_name',
        'start_date',
        'end_date',
        'status', // Add 'status' here
        'result'
    ];
}
