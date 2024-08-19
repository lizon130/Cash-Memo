<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class MemoController extends Controller
{
    public function createMemoForm()
    {
        return view('create_memo_form');
    }

    public function downloadMemo(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'address' => 'required|string',
            'phone' => 'required|string',
            'invoice_no' => 'required|string',
            'date' => 'required|date',
            'items' => 'required|string',
            'total' => 'required|string',
        ]);

        $data = $request->only(['name', 'address', 'phone', 'invoice_no', 'date', 'items', 'total']);
        $pdf = Pdf::loadView('memo', $data);
        return $pdf->download('memo.pdf');
    }
}
