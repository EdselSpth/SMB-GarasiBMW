<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index()
    {
        $customers = Customer::orderBy('created_at', 'desc')->get();

        return response()->json([
            'status' => 'success',
            'message' => 'Data pelanggan berhasil ditarik',
            'data' => $customers
        ], 200);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'phone_number' => 'required|string|max:20',
            'address' => 'required|string',
        ]);

        $validated['created_by'] = $request->user()->employees_id ?? 1;

        $customer = Customer::create($validated);

        return response()->json([
            'status' => 'success',
            'message' => 'Data Pelanggan berhasil ditambahkan!',
            'data' => $customer
        ], 201);
    }

    public function update(Request $request, $id)
    {
        $customer = Customer::findOrFail($id);

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'phone_number' => 'required|string|max:20',
            'address' => 'required|string',
        ]);

        $validated['created_by'] = $request->user()->employees_id ?? 1;

        $customer->update($validated);

        return response()->json([
            'status' => 'success',
            'message' => 'Data Pelanggan berhasil diupdate!',
            'data' => $customer
        ], 200);
    }

    public function destroy($id)
    {
        $customer = Customer::findOrFail($id);
        $customer->delete();

        return response()->json([
            'status' => 'success',
            'message' => 'Data Pelanggan berhasil dihapus!',
        ], 200);
    }
}
