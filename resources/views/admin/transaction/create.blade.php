@extends('layouts.app')

@section('content')

    <div class="d-flex justify-content-between mb-4">
        <h3>Create Transaction</h3>
        <a class="btn btn-success btn-sm" href="">List Transaction</a>
    </div>

    @if(session()->has('success'))
        <label class="alert alert-success w-100">{{session('success')}}</label>
    @elseif(session()->has('error'))
        <label class="alert alert-danger w-100">{{session('error')}}</label>
    @endif

    <div class="dashboard-wrapper">



        <div class="row">
            <!-- ============================================================== -->
            <!-- top selling products  -->
            <!-- ============================================================== -->
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="card">
                    <h5 class="card-header">Your Transaction</h5>
                    <div class="card-body p-0">
                        <form action="{{ route('transaksi.store') }}" method="post">
                            @csrf

                            <div class="form-group">
                              <label >Name</label>
                              <input type="text" name="nama_produk" class="form-control" placeholder=" add your name">
                            </div>
                            <div class="form-group">
                              <label >Price</label>
                              <input type="text" name="harga_produk" class="form-control" placeholder=" add your price">
                            </div>
                            <div class="form-group">
                                <label >Total</label>
                                <input type="text" name="jumlah_produk" class="form-control" placeholder=" add your total">
                              </div>
                              <div class="form-group">
                                <label >Date</label>
                                <input type="date" name="tanggal" class="form-control" placeholder=" add your date">
                              </div>

                            <select class="form-select" name="produk_id" aria-label="Default select example">
                                @foreach ($transaksi as $transaksi)

                                <option value="{{ $transaksi->id }}">{{ $transaksi->nama }}</option>
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
            <!-- ============================================================== -->
<!-- footer -->
<!-- ============================================================== -->
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
        </div>


@endsection
