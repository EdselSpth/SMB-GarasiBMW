<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $employees = Employee::all();
        return view('backend.employee.index', compact('employees'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'name' => 'required|string|max:255',
            'join_date' => 'required|date',
            'birth_date' => 'required|date',
            'address' => 'required|string',
            'email' => 'required|email|unique:employees,email',
            'password' => 'required|min:6',
            'role' => 'required|in:pemilik_bengkel,finance,kepala_bengkel,kepala_admin,admin,karyawan',
            'base_salary' => 'required|numeric',
        ]);

        $validate['password'] = Hash::make($validate['password']);

        $validate['created_by'] = Auth::user()->employees_id;

        Employee::create($validate);

        return redirect()->back()->with('success', 'Data Pegawai berhasil ditambahkan!');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $employee = Employee::findOrFail($id);

        $validate = $request->validate([
            'name' => 'required|string|max:255',
            'address' => 'required|string',
            'base_salary' => 'required|numeric',
            'status' => 'required|boolean',
        ]);

        if ($request->filled('password')) {
            $validate['password'] = Hash::make($validate['password']);
        }

        $employee->update($validate);

        return redirect()->back()->with('success', 'Data Pegawai berhasil diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $employee = Employee::findOrFail($id);

        // gw bikin false (resign) biar history gaji gak hilang
        $employee->update(['status' => false]);

        return redirect()->back()->with('success', 'Pegawai berhasil dinonaktifkan!');
    }
}
