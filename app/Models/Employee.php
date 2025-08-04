<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Employee extends Model
{
    Use HasFactory;
    protected $casts = [
        'date_hired' => 'date',
    ];

    protected $fillable = [
        'firstname',
        'middle_initial',
        'lastname',
        'role',
        'commission_rate',
        'date_hired',
    ];

}
