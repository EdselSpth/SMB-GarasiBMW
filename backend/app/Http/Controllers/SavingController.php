<?php

namespace App\Http\Controllers;

use App\Models\Saving;
use Illuminate\Http\Request;

class SavingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $savings = Saving::with(['employee', 'payroll'])->orderBy('due_date', 'asc')->get();
        return view('backend.savings.index', compact('savings'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'payroll_id' => 'required|exists:payrolls,payroll_id',
            'employees_id' => 'required|exists:employees,employees_id',
            'name' => 'required|string|max:255',
            'status' => 'required|in:locked,available,withdrawn,forfeited',
            'amount' => 'required|numeric|min:0',
            'due_date' => 'required|date',
        ]);

        Saving::create($validated);

        return redirect()->back()->with('success', 'Data tabungan berhasil ditambahkan!');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $saving = Saving::findOrFail($id);

        $validated = $request->validate([
            'status' => 'required|in:locked,available,withdrawn,forfeited',
        ]);

        $saving->update($validated);

        return redirect()->back()->with('success', 'Status tabungan berhasil diupdate!');
    }
}
