<?php
// File: app/Http/Controllers/TransactionController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaction;
use App\Models\User;
use App\Models\transaksi;
use App\Models\Movie;
use Illuminate\Support\Facades\Auth;

class TransactionController extends Controller
{
    public function transaksi(Request $request)
    {
        // Validasi input
        $request->validate([
            'email' => 'required',
        ]);

        // Ambil data pengguna yang sedang login
        $user = Auth::user();
        // Buat transaksi baru
        $transaction = Transaction::create([
            'username' => $request->input('username'),
            'email' => $request->input('email'),
            'image' => $request->input('image'),
            'payment_status' => 'pending',
        ]);

        // TODO: Tambahkan logika pembayaran sesuai dengan kebijakan Anda
        return redirect()->route('homeuser');
        return response()->json(['message' => 'Transaction created successfully', 'transaction' => $transaction], 201);
    }

    public function getTransactions()
    {
        // Mendapatkan semua transaksi
        $transactions = Transaction::all();

        return response()->json(['transactions' => $transactions], 200);
    }

    public function getTransaction($username)
    {
        // Mendapatkan transaksi berdasarkan ID
        $transaction = Transaction::find($username);

        if (!$transaction) {
            return response()->json(['message' => 'Transaction not found'], 404);
        }

        return response()->json(['transaction' => $transaction], 200);
    }
}
