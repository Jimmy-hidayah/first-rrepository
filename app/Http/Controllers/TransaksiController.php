<?php

namespace App\Http\Controllers;

use App\Http\Requests\TransaksiRequest;
use App\Models\kategori;
use App\Models\produk;
use App\Models\transaksi;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $transaksi = transaksi::all();
        return view('admin.transaction.index', compact(['transaksi']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $transaksi = produk::get();
        return view('admin.transaction.create', compact(['transaksi']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TransaksiRequest $request)
    {
        $validate = $request->validated();

        $validate['user_id'] = auth()->user()->id;

        transaksi::create($validate);

        return redirect()->route('transaksi.index')->with('success', 'Your category was successfully created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $transaction = transaksi::findOrFail($id);
        return view('admin.transaction.view', compact(['transaction']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $produks = produk::get();
        $transaction = transaksi::findOrFail($id);
        return view('admin.transaction.edit', compact(['transaction', 'produks']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(TransaksiRequest $request, $id)
    {
       $validate = $request->validated();
        $transaction = Transaksi::findOrFail($id);
        $transaction->update($validate);
        return redirect()->route('transaksi.index')->with('success', 'Edit successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $transaction = Transaksi::findOrFail($id);
        $transaction->delete();
        return redirect()->route('transaksi.index')->with('success', 'Delete successfully');
    }
}
