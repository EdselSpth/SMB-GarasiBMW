<?php

namespace App\Http\Controllers;

use App\Models\TransactionItem;
use App\Models\Sparepart;
use App\Models\ServiceTransaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TransactionItemController extends Controller
{

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'transaction_id' => 'required|exists:service_transactions,transaction_id',
            'item_type' => 'required|in:Service,Parts',
            'item_name' => 'required|string|max:255',
            'qty' => 'required|integer|min:1',
            'price' => 'required|numeric|min:0',
            'spare_part_id' => 'nullable|exists:spareparts,sparepart_id',
        ]);

        $validated['subtotal'] = $validated['qty'] * $validated['price'];

        if ($validated['item_type'] == 'Parts' && $validated['spare_part_id']) {
            $sparepart = Sparepart::findOrFail($validated['spare_part_id']);

            if ($sparepart->quantity < $validated['qty']) {
                return redirect()->back()->with('error', 'Stok sparepart tidak mencukupi!');
            }

            $sparepart->decrement('quantity', $validated['qty']);
        }

        TransactionItem::create($validated);

        return redirect()->back()->with('success', 'Item berhasil ditambahkan ke tagihan!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $item = TransactionItem::findOrFail($id);

        if ($item->item_type == 'Parts' && $item->spare_part_id) {
            Sparepart::where('sparepart_id', $item->spare_part_id)
                ->increment('quantity', $item->qty);
        }

        $item->delete();

        return redirect()->back()->with('success', 'Item berhasil dihapus dan stok dikembalikan!');
    }
}
