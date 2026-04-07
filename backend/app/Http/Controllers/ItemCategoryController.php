<?php

namespace App\Http\Controllers;

use App\Models\ItemCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ItemCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = ItemCategory::orderBy('created_at', 'desc')->get();
        return view('backend.item_categories.index', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255|unique:item_categories,name',
            'descriptions' => 'nullable|string',
        ]);

        // Catat admin yang bikin kategorinya
        $validated['employee_id'] = Auth::user()->employees_id;
        $validated['created_by'] = Auth::user()->employees_id;

        ItemCategory::create($validated);

        return redirect()->back()->with('success', 'Kategori baru berhasil ditambahkan!');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $category = ItemCategory::findOrFail($id);

        $validated = $request->validate([
            'name' => 'required|string|max:255|unique:item_categories,name,' . $id . ',category_id',
            'descriptions' => 'nullable|string',
        ]);

        $validated['edited_by'] = Auth::user()->employees_id;

        $category->update($validated);

        return redirect()->back()->with('success', 'Kategori berhasil diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $category = ItemCategory::findOrFail($id);
        $category->delete();
    }
}
