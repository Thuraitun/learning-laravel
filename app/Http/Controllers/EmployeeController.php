<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $employees = Employee::all();
        return view('employee', compact('employees'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('employee');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Employee::create($request->all());

        return redirect()->route('employee.index')->with(['create' => 'Customer Created!!']);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $detail = Employee::findOrFail($id);

        return view('employeeView', compact('detail'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $edit = Employee::findOrFail($id);

        return view('editEmployee', compact('edit'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        Employee::findOrFail($id)->update($request->all());

        return redirect()->route('employee.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Employee::findOrFail($id)->delete();

        return redirect()->route('employee.index');
    }
}
