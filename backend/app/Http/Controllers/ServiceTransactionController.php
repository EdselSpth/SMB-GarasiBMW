<?php

namespace App\Http\Controllers;

use App\Models\ServiceTransaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ServiceTransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $transactions = ServiceTransaction::with('vehicle')->orderBy('created_at', 'desc')->get();
        return view('backend.transactions.index', compact('transactions'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'vehicle_id' => 'required|exists:vehicles,vehicles_id',
            'branch' => 'required|in:AHMAD_YANI,PELAJAR_PEJUANG',
            'odometer' => 'required|integer',
        ]);

        $branchCode = $request->branch == 'AHMAD_YANI' ? 'AY' : 'PP';
        $dateCode = date('Ymd');
        $countToday = ServiceTransaction::whereDate('created_at', date('Y-m-d'))->count() + 1;
        $invoiceNumber = 'INV-' . $branchCode . '-' . $dateCode . '-' . str_pad($countToday, 3, '0', STR_PAD_LEFT);

        ServiceTransaction::create([
            'vehicle_id' => $request->vehicle_id,
            'invoice_number' => $invoiceNumber,
            'branch' => $request->branch,
            'odometer' => $request->odometer,
            'status_service' => 'pengecekan', // Status awal masuk bengkel
            'status_payment' => 'unpaid',
            'created_by' => Auth::user()->employees_id,
        ]);

        return redirect()->back()->with('success', 'Mobil berhasil didaftarkan untuk servis!');
    }

    /**
     * Update the specified resource in storage.
     */
    public function updateStatus(Request $request, $id)
    {
        $transaction = ServiceTransaction::findOrFail($id);

        $request->validate([
            'status_service' => 'required|in:menunggu,pengecekan,dikerjakan,dibatalkan,selesai'
        ]);

        $transaction->update([
            'status_service' => $request->status_service,
        ]);

        return redirect()->back()->with('success', 'Status transaksi berhasil diupdate!');
    }
}
