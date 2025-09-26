<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\Service;
use App\Models\TemporaryBilling;
use App\Models\BillingHistory;
use App\Models\BillingDetails;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BillingController extends Controller
{
    public function index()
    {
        $employees = Employee::all();
        $services = Service::all();
        $temporaryBillings = TemporaryBilling::all();
        $totalAmount = $temporaryBillings->sum('price');
        return view('billing', compact('employees', 'services', 'temporaryBillings', 'totalAmount'));
    }


    public function store(Request $request)
    {
        // VALIDATE INPUT DATA
        $validData = $request->validate([
            'customer_name' => 'required|string|max:255',
        ]);

        $customerName = $validData['customer_name'];
        $tempBill = TemporaryBilling::all();
        $totalAmount = $tempBill->sum('price');
        $numOfServices = $tempBill->count();

        //CHECK IF THERE ARE RECORDS IN THE TEMPORARY BILL TABLE
        if ($numOfServices === 0) {
            return redirect()->back()->with('error', 'No services in the temporary bill.');
        } else {
            // CREATE A NEW BILLING HISTORY
            $billingHistory = BillingHistory::create([
                'total_amount' => $totalAmount,
                'number_of_services' => $numOfServices,
                'customer_name' => $customerName,
            ]);

            // STORE BILLING DETAILS
            foreach ($tempBill as $item) {
                BillingDetails::create([
                    'billing_history_id' => $billingHistory->id,
                    'service' => $item->service,
                    'service_price' => $item->price,
                    'employee' => $item->employee,
                    'comission' => $item->commission_rate,
                    'comission_amount' => $item->commission_amount,
                ]);
            }

            // CLEAR TEMPORARY BILLING TABLE
            TemporaryBilling::truncate();
            return redirect()->route('billing.index')->with('success', 'Billing information saved successfully.');
        }
    }

    public function billingHistory()
    {
        $billingHistories = BillingHistory::orderBy('created_at', 'desc')->get();
        return view('billing-history', compact('billingHistories'));
    }

    public function showDetails($id)
    {
        $billingHistory = BillingHistory::with('details')->findOrFail($id);
        return view('history-details', compact('billingHistory'));
    }

}
