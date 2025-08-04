<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\DB;

class EmplyeeController extends Controller
{
    /**
     *
    * DUSPLAY LIST OF EMPLOYEES
     *
     * */
    public function index()
    {
        $employees = Employee::orderBy('created_at', 'desc')->get();
        return view('employees-list', compact('employees'));
    }


    /**
     *
     * DISPLAY FORM TO ADD NEW EMPLOYEE
     *
     * */

    public function create()
    {
        return view('forms.add-employee');
    }


    /**
     *
     * STORE NEW EMPLOYEE
     *
     * */
    public function store(Request $request)
    {
        $data = $request->validate([
            'firstname'       => 'required|string|max:255',
            'middle_initial'  => 'nullable|string|max:1',
            'lastname'        => 'required|string|max:255',
            'role'            => 'required|string|max:255',
            'commission_rate'            => 'required|numeric|min:0.01|max:100.00',
            'date_hired'      => 'required|date',
        ]);

        try{
            // Check for duplicate employee
            $exists = Employee::where('firstname', $data['firstname'])
                ->where('middle_initial', $data['middle_initial'])
                ->where('lastname', $data['lastname'])
                ->exists();

            if ($exists) {
                return redirect()->back()->withErrors(['employee_exists' => 'Employee already exists.']);
            }


            // Validate rate
            if ($data['commission_rate'] <= 0 || $data['commission_rate'] > 100) {
                return redirect()->back()->withErrors(['commission_rate' => 'Rate must be between 0.01 and 100.00']);
            }


            // Store employee
            DB::beginTransaction();
            Employee::create($data);
            DB::commit();

            // Redirect with success message
            return redirect()->route('employees.index')->with('success', 'New employee added successfully.');

        }catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back()->withErrors(['error' => 'An error occurred while adding the employee: ' . $e->getMessage()]);
        }
    }
}