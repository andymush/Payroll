<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\Departments;
use Illuminate\Support\Facades\Log;
use App\Models\Employees;

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
