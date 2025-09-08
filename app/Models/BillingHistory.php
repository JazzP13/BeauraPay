<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BillingHistory extends Model
{
    protected $table = 'billing_history';
    protected $fillable = [
        'number_of_services',
        'customer_name',
        'total_amount',
    ];


    public function details(){
        return $this->hasMany(BillingDetails::class, 'billing_history_id', 'id');
    }
}
