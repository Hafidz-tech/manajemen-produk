<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTransaksiRequest;
use App\Http\Requests\UpdateTransaksiRequest;
use App\Models\Transaksi;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json(Transaksi::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTransaksiRequest $request)
    {
        Transaksi::create($request->validated());

        return response()->json(['message' => 'Transaksi berhasil ditambahkan'], 202);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        try {
            $transaksi = Transaksi::findOrFail($id);

            return response()->json([
                'message' => 'Data berhasil ditemukan',
                'data' => $transaksi,
            ], 202);
        } catch(\Exception $e) {
            return response()->json(['message' => 'Data tidak ditemukan'], 500);
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Transaksi $transaksi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTransaksiRequest $request, Transaksi $transaksi)
    {
        $transaksi->update($request->validated());

        return response()->json(['message' => 'Transaksi berhasil diperbarui'], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        try {
            $transaksi = Transaksi::find($id);

            if(!$transaksi) {
                return response()->json(['message' => 'Data transaksi tidak ditemukan'], 404);
            }

            $transaksi->delete();

            return response()->json(['message' => 'Data transaksi berhasil dihapus'], 202);
        } catch(\Exception $e) {
            return response()->json([
                'message' => 'Terjadi kesalahan saat menghapus data',
                'error' => $e->getMessage(),
            ]);
        }
    }
}
