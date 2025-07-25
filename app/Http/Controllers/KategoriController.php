<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use GuzzleHttp\Psr7\Message;
use Illuminate\Validation\ValidationException;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json(Kategori::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $request->validate([
                'nama' => 'required',
            ]);

            Kategori::create([
                'nama' => $request->nama,
            ]);

            return response()->json(['message' => 'Data berhasil ditambahkan'], 201);
        } catch (ValidationException $e) {
            //Jika validasi gagal
            return response()->json([
                'message' => 'Validasi gagal',
                'errors' => $e->errors(),
            ], 422);
        } catch (\Exception $e) {
            //Jika terjadi error lain
            return response()->json([
                'message' => 'Terjadi kesalahan saat menyimpan data',
                'error' => $e->getMessage(),
            ], 500);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        try {
            $kategori = Kategori::findOrFail($id);

            return response()->json([
                'message' => 'Data berhasil ditemukan',
                'data' => $kategori,
            ], 202);
        } catch(\Exception $e) {
            return response()->json(['message' => 'Data tidak ditemukan'], 404);
        }
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        try {
            $request->validate([
                'nama' => 'required',
            ]);

            $kategori = Kategori::findOrFail($id);

            $kategori->update([
                'nama' => $request->nama,
            ]);
            
            return response()->json([
                'message' => 'Data berhasil diperbarui',
                'data' => $kategori,
            ], 202);

        } catch(ValidationException $e) {
            return response()->json([
                'message' => 'Validasi gagal',
                'errors' => $e->errors(),
            ], 422);
        } catch(\Exception $e) {
            return response()->json([
                'message' => 'Terjadi kesalahan saat mengirim data',
                'error' => $e->getMessage(),
            ], 500);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        try {
            $kategori = Kategori::findOrFail($id);
            $kategori->delete();

            return response()->json(['message' => 'Data berhasil dihapus']);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Data gagal dihapus']);
        }
    }
}
