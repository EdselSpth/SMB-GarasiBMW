<?php

namespace App\Http\Controllers;

use App\Models\CarWork;
use App\Models\Customer;
use App\Models\Vehicle;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CarWorkController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $carWorks = CarWork::orderBy('created_at', 'desc')->get();
        return view('backend.car_works.index', compact('carWorks'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'customer_id' => 'required|exists:customers,customer_id',
            'vehicle_id' => 'required|exists:vehicles,vehicles_id',
            'sparepart_id' => 'nullable|exists:spareparts,sparepart_id',
            'sparepart_name' => 'nullable|string|max:255',
            'sparepart_used_amount' => 'nullable|string',
        ]);

        // Auto-fill snapshot data dari relasi biar admin gak ngetik ulang dua kali
        $customer = Customer::findOrFail($validated['customer_id']);
        $vehicle = Vehicle::findOrFail($validated['vehicle_id']);

        $validated['customer_name'] = $customer->name;
        $validated['phone_number'] = $customer->phone_number;
        $validated['address'] = $customer->address;
        $validated['car_name'] = $vehicle->model;
        $validated['license_plate'] = $vehicle->license_plate;
        $validated['engine_code'] = $vehicle->engine_code;
        $validated['odometer'] = $vehicle->odometer;

        $validated['created_by'] = Auth::user()->employees_id;

        CarWork::create($validated);

        return redirect()->back()->with('success', 'Log pengerjaan mobil berhasil dicatat!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $carWork = CarWork::findOrFail($id);
        $carWork->delete();

        return redirect()->back()->with('success', 'Log pengerjaan dihapus!');
    }
}
