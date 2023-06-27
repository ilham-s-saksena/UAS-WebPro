<?php

namespace App\Http\Controllers;

use App\Models\dataBarang;
use Illuminate\Http\Request;

class DataBarangController extends Controller
{
    
    public function index()
    {
        $data = dataBarang::all();
        return view('dataBarang', compact('data'));
    }

    public function create(Request $request)
    {
        $data = new dataBarang();
        $data->nama_barang = $request->input('nama_barang');
        $data->kode_barang = $request->input('kode_barang');
        $data->harga_beli = $request->input('harga_beli');
        $data->harga_jual = $request->input('harga_jual');
        $data->stok = $request->input('stok');
        $data->terjual = $request->input('terjual');
        $data->save();

        return back();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(dataBarang $dataBarang)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(dataBarang $dataBarang)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, dataBarang $dataBarang)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(dataBarang $dataBarang)
    {
        //
    }
}
