<?php

namespace App\Http\Controllers;
use App\Models\TemporaryBilling;
use Illuminate\Http\Request;

class TemporaryBillingController extends Controller
{

    # Store data to TemporaryBilling table
    public function toTemporaryTable(Request $request){

        $selected_employee = $request->employee_select;
        $selected_service = $request->service_select;

        list($service, $price) = explode('-', $selected_service, 2);
        $service = trim($service);
        $price = trim($price);

        $comm_rate = 0.30;
        $emp_comm = $price * $comm_rate;

        $extractedData = [
            'employee' => $selected_employee,
            'service' => $service,
            'price' => $price,
            'commission_rate' => $comm_rate,
            'commission_amount' => $emp_comm
        ];

        TemporaryBilling::create($extractedData);
        return redirect()->route('billing.index');

    }



    # DELETE SPECIFIC RECORDS IN TEMPORARY BILLING TABLE
    public function destroy($id){
        $record = TemporaryBilling::findOrFail($id);
        $record->delete();
        return response()->json(['success' => true]);
    }
}
