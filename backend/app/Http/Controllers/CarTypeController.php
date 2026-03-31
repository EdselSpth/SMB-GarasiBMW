<?php

namespace App\Http\Controllers;

use App\Models\CarType;
use App\Models\EngineType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CarTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $carTypes = CarType::with('engineType')->orderBy('created_at', 'desc')->get();
        $engineTypes = EngineType::all();

        return view('backend.car_types.index', compact('carTypes', 'engineTypes'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'engine_type_id' => 'required|exists:engine_types,engine_type_id',
            'chassis_number' => 'required|string|max:255',
            'name' => 'required|string|max:255',
            'series' => 'required|string|max:255',
            'engine_code' => 'required|string|max:255',
        ]);

        $validated['created_by'] = Auth::user()->employees_id;

        CarType::create($validated);

        return redirect()->back()->with('success', 'Tipe Mobil berhasil ditambahkan!');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $carType = CarType::findOrFail($id);

        $validated = $request->validate([
            'engine_type_id' => 'required|exists:engine_types,engine_type_id',
            'chassis_number' => 'required|string|max:255',
            'name' => 'required|string|max:255',
            'series' => 'required|string|max:255',
            'engine_code' => 'required|string|max:255',
        ]);

        $validated['edited_by'] = Auth::user()->employees_id;

        $carType->update($validated);

        return redirect()->back()->with('success', 'Tipe Mobil berhasil diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $carType = CarType::findOrFail($id);
        $carType->delete();

        return redirect()->back()->with('success', 'Tipe Mobil berhasil dihapus!');
    }
}
