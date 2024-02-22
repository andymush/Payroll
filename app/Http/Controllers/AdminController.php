<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\Departments;
use Illuminate\Support\Facades\Log;
use App\Models\Employees;
use App\Models\User;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Inertia::render('Dashboard');
    }

    public function createEmployee()
    {
        $departments = Departments::select('dept_id', 'dept_name')->get();
        Log::info($departments);

        return Inertia::render('Admin/CreateEmployee')
            ->with('departments', $departments);
    }

    public function employees()
    {
        $employees = Employees::all();
        return Inertia::render('Admin/EmployeesList')
            ->with('employees', $employees)
        ;
    }

    public function storeEmployee(Request $request)
    {
        Log::info($request);

        $data = request()->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required',
            'dept_id' => 'required',
            'designation' => 'required',
        ]);

        //$employee = new Employees();
        //$user = new User();

        // Insert into users table then get the user id and insert into employees table
        //create password from the first name and last name of the employee
        $password = $request->firstname . $request->lastname;
        Log::info('the password is:',$password);

        $user = User::create([
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'email' => $request->email,
            'password' => Hash::make($request->firstname . $request->lastname),
        ]);
        Log::info($user);

        $mployee = Employees::create([
            'UserId' => $user->id,
            'DeptId' => $request->dept_id,
            'designation' => $request->designation,
            'EmpCode' => 'EMP' . rand(1000, 9999),
        ]);

        //return redirect()->route('employees');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Admin $admin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Admin $admin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Admin $admin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Admin $admin)
    {
        //
    }
}
