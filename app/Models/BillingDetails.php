<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BillingDetails extends Model
{
    protected $table = 'billing_details';
    protected $fillable = [
        'billing_history_id',
        'service',
        'service_price',
        'employee',
        'commission',
        'comission_amount',
    ];

    public function billingHistory()
    {
        return $this->belongsTo(BillingHistory::class, 'billing_history_id', 'id');
    }
}
