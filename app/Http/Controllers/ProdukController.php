<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use App\Repositories\ProdukRepository;
use App\Repositories\ProdukRepositoryInterface;
use Illuminate\Validation\ValidationException;
use Illuminate\Http\Request;

class ProdukController extends Controller
{

    protected $produkRepo;
    
    public function __construct(ProdukRepositoryInterface $produkRepo)
    {
        $this->produkRepo = $produkRepo;    
    }

    public function index()
    {
        $data = $this->produkRepo->all();

        if ($data->isEmpty()) {
            return response()->json([
                'message' => 'Data produk masih kosong',
                'data' => []
            ], 200);
        }
        return response()->json([
            'message' => 'Berhasil mengambil data produk',
            'data' => $data
        ], 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, $id)
    {
        try {
            $produk = $this->produkRepo->create($request->all());

            return response()->json([
                'message' => 'Produk berhasil ditambahkan',
                'data' => $produk
            ], 201);
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'gagal menambahkan produk',
            ], 500);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        try {
            $data = $this->produkRepo->find($id);

            return response()->json([
                'message' => 'Data produk berhasil ditemukan',
                'data' => $data
            ], 200);
        } catch(\Exception $e) {
            return response()->json(['message' => 'Data produk tidak ada'], 200);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        try {
            $updated = $this->produkRepo->update($id, $request->all());

            if($updated) {
                return response()->json([
                    'message' => 'Produk berhasil diperbarui',
                    'data' => $updated
                ], 201);
            } 
        } catch(\Exception $e) {
            return response()->json([
                'message' => 'Terjadi kesalahan',
                'error' => $e->getMessage(),
            ]);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        try {

            $deleted = $this->produkRepo->delete($id);

            if ($deleted) {
                return response()->json(['message' => 'Produk berhasil dihapus'], 200);
            } else {
                return response()->json(['message' => 'Produk tidak ditemukan'], 404);
            }
        } catch(\Exception $e){
            return response()->json(['message' => 'Terjadi kesalahan saat menghapus data'],500);
        }
    }

}
