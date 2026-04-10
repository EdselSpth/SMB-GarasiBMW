<?php

namespace App\Http\Controllers;

use App\Models\Sparepart;
use Illuminate\Http\Request;

class SparepartController extends Controller
{
    public function index()
    {
        // Tetep narik relasi category dan supplier biar frontend gampang nampilinnya
        $spareparts = Sparepart::with(['category', 'supplier'])->orderBy('created_at', 'desc')->get();

        return response()->json([
            'status' => 'success',
            'message' => 'Data inventaris suku cadang berhasil ditarik',
            'data' => $spareparts
        ], 200);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'item_category_id' => 'required|exists:item_categories,category_id',
            'supplier_id' => 'required|exists:suppliers,supplier_id',
            'item_code' => 'required|string|unique:spareparts,item_code',
            'name' => 'required|string|max:255',
            'category' => 'required|string|max:255',
            'cost_off_sell' => 'required|numeric',
            'selling_price' => 'required|numeric',
            'quantity' => 'required|integer|min:0',
            'date' => 'required|date',
        ]);

        // Ini pake ID user yang lagi login via API token nanti
        $validated['created_by'] = $request->user()->employees_id ?? 1; // Fallback ke 1 buat testing sementara

        $sparepart = Sparepart::create($validated);

        return response()->json([
            'status' => 'success',
            'message' => 'Suku cadang berhasil ditambahkan ke inventaris!',
            'data' => $sparepart
        ], 201);
    }

    public function update(Request $request, $id)
    {
        $sparepart = Sparepart::findOrFail($id);

        $validated = $request->validate([
            'item_category_id' => 'required|exists:item_categories,category_id',
            'supplier_id' => 'required|exists:suppliers,supplier_id',
            'name' => 'required|string|max:255',
            'cost_off_sell' => 'required|numeric',
            'selling_price' => 'required|numeric',
            'quantity' => 'required|integer|min:0',
        ]);

        $validated['updated_by'] = $request->user()->employees_id ?? 1;

        $sparepart->update($validated);

        return response()->json([
            'status' => 'success',
            'message' => 'Data suku cadang berhasil diupdate!',
            'data' => $sparepart
        ], 200);
    }

    public function destroy($id)
    {
        $sparepart = Sparepart::findOrFail($id);
        $sparepart->delete();

        return response()->json([
            'status' => 'success',
            'message' => 'Suku cadang berhasil dihapus!',
        ], 200);
    }
}
