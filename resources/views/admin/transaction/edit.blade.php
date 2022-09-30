@extends('layouts.app')

@section('content')

<div class="dashboard-wrapper">



    <div class="row">
        <!-- ============================================================== -->
        <!-- top selling products  -->
        <!-- ============================================================== -->
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card">
                <h5 class="card-header">Your Transaction</h5>
                <div class="card-body p-0">
                    <form action="{{ route('transaksi.update', $transaction->id) }}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                          <label for="exampleInputEmail1">Name</label>
                          <input type="text" name="nama_produk" value="{{ $transaction->nama_produk }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder=" edit your transaction">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputEmail1">Price</label>
                          <input type="text" name="harga_produk" value="{{ $transaction->harga_produk }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder=" edit your price">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Total</label>
                            <input type="text" name="jumlah_produk" value="{{ $transaction->jumlah_produk }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder=" edit your total">
                          </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Date</label>
                            <input type="date" name="tanggal" value="{{ $transaction->tanggal }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder=" edit your date">
                        </div>
                        <select class="form-select" name="produk_id" aria-label="Default select example">
                            @foreach ($produks as $produk)

                            <option value="{{ $produk->id }}">{{ $produk->nama }}</option>
                            @endforeach

                          </select>


                        <button type="submit" class="btn btn-primary">Submit</button>
                      </form>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- end top selling products  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->

        <!-- ============================================================== -->
    </div>
    <div class="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                    Copyright © 2022 Concept. All rights reserved. Dashboard by <a href="https://colorlib.com/wp/">Jimmy</a>.
                </div>

            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- end footer -->
    <!-- ============================================================== -->
@endsection
