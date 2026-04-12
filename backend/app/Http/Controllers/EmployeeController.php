<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class EmployeeController extends Controller
{
    public function index()
    {
        $employees = Employee::all();

        return response()->json([
            'status' => 'success',
            'message' => 'Data pegawai berhasil ditarik',
            'data' => $employees
        ], 200);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'join_date' => 'required|date',
            'birth_date' => 'required|date',
            'address' => 'required|string',
            'email' => 'required|email|unique:employees,email',
            'password' => 'required|min:6',
            'role' => 'required|in:pemilik_bengkel,finance,kepala_bengkel,kepala_admin,admin,karyawan',
            'base_salary' => 'required|numeric',
        ]);

        $validated['password'] = Hash::make($validated['password']);

        $validated['created_by'] = $request->user()->employees_id ?? 1;

        $employee = Employee::create($validated);

        return response()->json([
            'status' => 'success',
            'message' => 'Data Pegawai berhasil ditambahkan!',
            'data' => $employee
        ], 201);
    }

    public function update(Request $request, $id)
    {
        $employee = Employee::findOrFail($id);

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'address' => 'required|string',
            'base_salary' => 'required|numeric',
            'status' => 'required|boolean',
        ]);

        if ($request->filled('password')) {
            $validated['password'] = Hash::make($request->password);
        }

        $validated['update_by'] = $request->user()->employees_id ?? 1;
        $employee->update($validated);

        return response()->json([
            'status' => 'success',
            'message' => 'Data Pegawai berhasil diupdate!',
            'data' => $employee
        ], 200);
    }

    public function destroy($id)
    {
        $employee = Employee::findOrFail($id);
        $employee->update(['status' => false]);

        return response()->json([
            'status' => 'success',
            'message' => 'Pegawai berhasil dinonaktifkan!',
        ], 200);
    }
}
