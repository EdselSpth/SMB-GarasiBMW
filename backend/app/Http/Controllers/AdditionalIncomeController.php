<?php

namespace App\Http\Controllers;

use App\Models\AdditionalIncome;
use Illuminate\Http\Request;

class AdditionalIncomeController extends Controller
{

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'payroll_id' => 'required|exists:payrolls,payroll_id',
            'name' => 'required|string|max:255',
            'type' => 'required|in:income,deduction,savings',
            'amount' => 'required|numeric|min:0',
            'disbursement_method' => 'required|in:bulan ini,akhir tahun,bulan ke 40',
        ]);

        AdditionalIncome::create($validated);

        return redirect()->back()->with('success', 'Komponen gaji tambahan berhasil dicatat!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $income = AdditionalIncome::findOrFail($id);
        $income->delete();

        return redirect()->back()->with('success', 'Komponen gaji berhasil dihapus!');
    }
}
