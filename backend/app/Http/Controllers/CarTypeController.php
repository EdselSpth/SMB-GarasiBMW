<?php

namespace App\Http\Controllers;

use App\Models\CarType;
use Illuminate\Http\Request;

class CarTypeController extends Controller
{
    public function index()
    {
        $carTypes = CarType::with('engineType')->orderBy('created_at', 'desc')->get();
        return response()->json(['status' => 'success', 'data' => $carTypes], 200);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'engine_type_id' => 'required|exists:engine_types,engine_type_id',
            'chassis_number' => 'required|string|max:255',
            'name' => 'required|string|max:255',
            'series' => 'required|string|max:255',
            'engine_code' => 'required|string|max:255',
        ]);
        $validated['created_by'] = $request->user()->employees_id ?? 1;

        $carType = CarType::create($validated);
        return response()->json(['status' => 'success', 'message' => 'Tipe Mobil ditambahkan', 'data' => $carType], 201);
    }

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
        $validated['created_by'] = $request->user()->employees_id ?? 1;

        $carType->update($validated);
        return response()->json(['status' => 'success', 'message' => 'Tipe Mobil diupdate', 'data' => $carType], 200);
    }

    public function destroy($id)
    {
        CarType::findOrFail($id)->delete();
        return response()->json(['status' => 'success', 'message' => 'Tipe Mobil dihapus'], 200);
    }
}
