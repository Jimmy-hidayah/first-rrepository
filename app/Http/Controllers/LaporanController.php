<?php

namespace App\Http\Controllers;

use App\Http\Requests\LaporanRequest;
use App\Models\laporan;
use Illuminate\Http\Request;

use PDF;

class LaporanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $laporans = laporan::all();
        return view('admin.laporan.index', compact(['laporans']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.laporan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(LaporanRequest $request)
    {
        $validate = $request->validated();

        laporan::create($validate);

        return redirect()->route('laporan.index')->with('success', 'Your category was successfully created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kategori = Laporan::findOrFail($id);
        return view('admin.laporan.edit', compact(['laporan']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(LaporanRequest $request, $id)
    {
       $validate = $request->validated();
        $laporan = Laporan::findOrFail($id);
        $laporan->update($validate);
        return redirect()->route('laporan.index')->with('success', 'Edit successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $laporan = Laporan::findOrFail($id);
        $laporan->delete();
        return redirect()->route('laporan.index')->with('success', 'Delete successfully');
    }
}

