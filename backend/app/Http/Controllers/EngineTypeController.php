<?php

namespace App\Http\Controllers;

use App\Models\EngineType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EngineTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $engineTypes = EngineType::orderBy('created_at', 'desc')->get();
        return view('backend.engine_types.index', compact('engineTypes'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'cylinders' => 'required|string|max:255',
            'oil_cap' => 'required|numeric',
            'fuel_type' => 'required|in:Bensin,Diesel',
            'engine_cap' => 'required|numeric',
        ]);

        $validated['created_by'] = Auth::user()->employees_id;

        EngineType::create($validated);

        return redirect()->back()->with('success', 'Tipe Mesin berhasil ditambahkan!');
    }

    /**
     * Update the specified resource in storage.
     */
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

        $validated['edited_by'] = Auth::user()->employees_id;

        $engineType->update($validated);

        return redirect()->back()->with('success', 'Tipe Mesin berhasil diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $engineType = EngineType::findOrFail($id);
        $engineType->delete();

        return redirect()->back()->with('success', 'Tipe Mesin berhasil dihapus!');
    }
}
