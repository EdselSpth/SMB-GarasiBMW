<?php

namespace App\Http\Controllers;

use App\Models\EngineType;
use Illuminate\Http\Request;

class EngineTypeController extends Controller
{
    public function index()
    {
        $engineTypes = EngineType::orderBy('created_at', 'desc')->get();
        return response()->json(['status' => 'success', 'data' => $engineTypes], 200);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'cylinders' => 'required|string|max:255',
            'oil_cap' => 'required|numeric',
            'fuel_type' => 'required|in:Bensin,Diesel',
            'engine_cap' => 'required|numeric',
        ]);
        $validated['created_by'] = $request->user()->employees_id ?? 1;

        $engineType = EngineType::create($validated);
        return response()->json(['status' => 'success', 'message' => 'Tipe Mesin ditambahkan', 'data' => $engineType], 201);
    }

    public function update(Request $request, $id)
    {
        $engineType = EngineType::findOrFail($id);
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'cylinders' => 'required|string|max:255',
            'oil_cap' => 'required|numeric',
            'fuel_type' => 'required|in:Bensin,Diesel',
            'engine_cap' => 'required|numeric',
        ]);
        $validated['created_by'] = $request->user()->employees_id ?? 1;

        $engineType->update($validated);
        return response()->json(['status' => 'success', 'message' => 'Tipe Mesin diupdate', 'data' => $engineType], 200);
    }

    public function destroy($id)
    {
        EngineType::findOrFail($id)->delete();
        return response()->json(['status' => 'success', 'message' => 'Tipe Mesin dihapus'], 200);
    }
}
