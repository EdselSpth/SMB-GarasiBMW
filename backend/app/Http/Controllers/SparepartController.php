<?php

namespace App\Http\Controllers;

use App\Models\Sparepart;
use App\Models\ItemCategory;
use App\Models\Supplier;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SparepartController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $spareparts = Sparepart::with(['category', 'supplier'])->orderBy('created_at', 'desc')->get();
        return view('backend.spareparts.index', compact('spareparts'));
    }

    /**
     * Store a newly created resource in storage.
     */
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

        $validated['created_by'] = Auth::user()->employees_id;

        Sparepart::create($validated);

        return redirect()->back()->with('success', 'Data Sparepart berhasil ditambahkan!');
    }

    /**
     * Update the specified resource in storage.
     */
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

        $validated['updated_by'] = Auth::user()->employees_id;

        $sparepart->update($validated);

        return redirect()->back()->with('success', 'Data suku cadang berhasil diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $sparepart = Sparepart::findOrFail($id);
        $sparepart->delete();

        return redirect()->back()->with('success', 'Data suku cadang berhasil dihapus!');
    }
}
