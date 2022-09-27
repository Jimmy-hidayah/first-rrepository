@extends('layouts.app')

@section('content')

<div class="dashboard-wrapper">



    <div class="row">
        <!-- ============================================================== -->
        <!-- top selling products  -->
        <!-- ============================================================== -->
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card">
                <h5 class="card-header">Your Product</h5>
                <div class="card-body p-0">
                    <form action="{{ route('produk.update', $produk->id) }}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                          <label for="exampleInputEmail1">Product</label>
                          <input type="text" name="nama" value="{{ $produk->nama }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder=" edit your produk">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputEmail1">Price</label>
                          <input type="text" name="harga" value="{{ $produk->harga }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder=" edit your harga">
                        </div>


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
