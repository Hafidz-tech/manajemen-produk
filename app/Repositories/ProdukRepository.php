<?php

namespace App\Repositories;

use App\Models\Produk;

class ProdukRepository implements ProdukRepositoryInterface
{
    public function all()
    {
        return Produk::all();
    }

    public function find($id)
    {
        return Produk::findOrFail($id);
    }

    public function create(array $data)
    {
        return Produk::create($data);
    }

    public function update($id, array $data)
    {
        $produk = Produk::findOrFail($id);
        $produk->update($data);
        return $produk;
    }

    public function delete($id)
    {
        return Produk::destroy($id);
    }
}
