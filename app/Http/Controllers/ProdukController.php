<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProdukRequest;
use App\Models\kategori;
use App\Models\produk;
use Illuminate\Http\Request;

use PDF;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produks = produk::all();
        return view('admin.product.index', compact(['produks']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kategoris = kategori::get();
        return view('admin.product.create', compact(['kategoris']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProdukRequest $request)
    {
        $validate = $request->validated();

        produk::create($validate);

        return redirect()->route('produk.index')->with('success', 'Your category was successfully created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = produk::findOrFail($id);
        return view('admin.product.view', compact(['product']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $produk = Produk::findOrFail($id);
        return view('admin.product.edit', compact(['produk']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProdukRequest $request, $id)
    {
       $validate = $request->validated();
        $kategori = Produk::findOrFail($id);
        $kategori->update($validate);
        return redirect()->route('produk.index')->with('success', 'Edit successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kategori = Produk::findOrFail($id);
        $kategori->delete();
        return redirect()->route('produk.index')->with('success', 'Delete successfully');
    }

    public function laporan(){
        $produks = produk::all();
        return view('admin.product.laporan', compact(['produks']));
    }

    public function laporan_cetak()
    {
    	$produk = produk::all();

    	$pdf = PDF::loadview('admin.product.cetak',['produks'=>$produk]);
    	return $pdf->download('produk.pdf');
    }
}
