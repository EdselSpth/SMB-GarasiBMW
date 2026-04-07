<?php

namespace App\Http\Controllers;

use App\Models\Vehicle;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VehicleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $vehicles = Vehicle::with(['customer', 'carType'])->orderBy('created_at', 'desc')->get();
        return view('backend.vehicles.index', compact('vehicles'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'customer_id' => 'required|exists:customers,customer_id',
            'car_type_id' => 'required|exists:car_types,car_type_id',
            'model' => 'required|string|max:255',
            'engine_code' => 'required|string|max:255',
            'production_code' => 'required|string|max:255',
            'license_plate' => 'required|string|max:50|unique:vehicles,license_plate',
            'odometer' => 'required|integer|min:0',
        ]);

        $validated['created_by'] = Auth::user()->employees_id;

        Vehicle::create($validated);

        return redirect()->back()->with('success', 'Data Kendaraan berhasil ditambahkan!');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $vehicle = Vehicle::findOrFail($id);

        $validated = $request->validate([
            'model' => 'required|string|max:255',
            'engine_code' => 'required|string|max:255',
            'production_code' => 'required|string|max:255',
            'license_plate' => 'required|string|max:50|unique:vehicles,license_plate,' . $id . ',vehicles_id',
            'odometer' => 'required|integer|min:0',
        ]);

        $validated['updated_by'] = Auth::user()->employees_id;

        $vehicle->update($validated);

        return redirect()->back()->with('success', 'Data Kendaraan berhasil diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $vehicle = Vehicle::findOrFail($id);
        $vehicle->delete();

        return redirect()->back()->with('success', 'Data Kendaraan berhasil dihapus!');
    }
}
