<?php

namespace App\Http\Controllers;

use App\Models\CarType;
use Illuminate\Http\Request;

class CarTypeController extends Controller
{
    public function index(Request $request)
    {
        $query = CarType::with('engineType');

        // Filter Pencarian Umum (Nama atau Chassis)
        if ($request->has('search')) {
            $search = $request->search;
            $query->where(function ($q) use ($search) {
                $q->where('name', 'LIKE', "%{$search}%")
                    ->orWhere('chassis_number', 'LIKE', "%{$search}%");
            });
        }

        // Filter Spesifik Seri
        if ($request->filled('series')) {
            $query->where('name', $request->series);
        }

        // Filter Berdasarkan Mesin
        if ($request->filled('engine_type_id')) {
            $query->where('engine_type_id', $request->engine_type_id);
        }

        return $query->orderBy('created_at', 'desc')->paginate($request->limit ?? 10);
    }

    public function show($id)
    {
        $carType = CarType::with('engineType')->find($id);

        if (!$carType) {
            return response()->json(['message' => 'Data mobil gak ketemu'], 404);
        }

        return response()->json(['status' => 'success', 'data' => $carType], 200);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'chassis_number' => 'required|string',
            'name'           => 'required|string',
            'series'         => 'required|string',
            'engine_type_id' => 'required|exists:engine_types,engine_type_id', // WAJIB ADA & HARUS ADA DI TABEL ENGINE_TYPES
            'engine_code'    => 'nullable|string',
        ]);
        $validated['created_by'] = $request->user()->employees_id ?? 1;

        $carType = CarType::create($validated);
        return response()->json(['status' => 'success', 'message' => 'Tipe Mobil ditambahkan', 'data' => $carType], 201);
    }

    public function update(Request $request, $id)
    {
        $carType = CarType::findOrFail($id);
        $validated = $request->validate([
            'chassis_number' => 'required|string|max:255',
            'name'           => 'required|string|max:255',
            'series'         => 'required|string|max:255',
            'engine_type_id' => 'required|exists:engine_types,engine_type_id', // Tambahin ini brok!
            'engine_code'    => 'nullable|string|max:255',
        ]);
        $validated['edited_by'] = $request->user()->employees_id ?? 1;

        $carType->update($validated);
        return response()->json(['status' => 'success', 'message' => 'Tipe Mobil diupdate'], 200);
    }

    public function destroy($id)
    {
        CarType::findOrFail($id)->delete();
        return response()->json(['status' => 'success', 'message' => 'Tipe Mobil dihapus'], 200);
    }
    // Tambahkan di CarTypeController.php
    public function getUniqueSeries()
    {
        // Mengambil field 'name' yang unik dari tabel car_types
        $series = \App\Models\CarType::whereNotNull('name')
            ->where('name', '!=', '')
            ->distinct()
            ->orderBy('name', 'asc')
            ->pluck('name'); // Ambil field 'name' sesuai koreksi lu

        return response()->json([
            'status' => 'success',
            'data' => $series
        ], 200);
    }
}
