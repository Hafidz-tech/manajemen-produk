<?php

use App\Http\Controllers\DetailTransaksiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\TransaksiController;
use App\Models\DetailTransaksi;
use App\Models\Transaksi;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('produks', ProdukController::class);
Route::apiResource('kategoris', KategoriController::class);
Route::apiResource('pelanggans', PelangganController::class);
Route::apiResource('transaksis', TransaksiController::class);
Route::apiResource('detailtransaksis', DetailTransaksiController::class);
