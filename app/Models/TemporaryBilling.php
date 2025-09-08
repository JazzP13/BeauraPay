<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TemporaryBilling extends Model
{
    protected $fillable = ['employee', 'service', 'price', 'commission_rate', 'commission_amount'];
}
