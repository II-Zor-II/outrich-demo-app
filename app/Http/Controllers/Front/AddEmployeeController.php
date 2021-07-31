<?php namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Employee;
use Illuminate\Http\Request;

class AddEmployeeController extends Controller
{
    public function show(Request $request)
    {
        $data = [];
        $data['is_update'] = $request->is_update;
        if ($request->is_update === "true" && !is_null($request->id)) {
            $employee = Employee::find($request->id)->first();
            $data['id'] = $request->id;
            $data['first_name'] = $employee->first_name;
            $data['last_name'] = $employee->last_name;
            $data['date_of_birth'] = $employee->date_of_birth;
        }
        return view('create-employee', $data);
    }

    public function create(Request $request)
    {
        $employee = new Employee;
        $employee->first_name = $request->first_name;
        $employee->last_name = $request->last_name;
        $employee->date_of_birth = $request->date_of_birth;
        $employee->save();
        return redirect('/');
    }

    public function update(Request $request)
    {
        $employee = Employee::find($request->id)->first();
        $employee->first_name = $request->first_name;
        $employee->last_name = $request->last_name;
        $employee->date_of_birth = $request->date_of_birth;
        $employee->save();
        return redirect('/');
    }
}
