@extends('layouts.app')

@section('content')
<div class="dashboard-wrapper">
    @if (session('success'))
    <div class="alert alert-success alert-block">
        <button type="button" class="close" data-dismiss="alert">x</button>
        <strong>{{ session('success') }}</strong>
    </div>
    @endif
    <!-- ============================================================== -->
    <!-- pagehader  -->
    <!-- ============================================================== -->
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="page-header">
                <h3 class="mb-2">Dashboard Report Transaction </h3>
                <p class="pageheader-text">Lorem ipsum dolor sit ametllam fermentum ipsum eu porta consectetur adipiscing elit.Nullam vehicula nulla ut egestas rhoncus.</p>
                <div class="page-breadcrumb">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Report Transaction </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->





    <table class="table table-striped">
        <a href="/cetaktransaksi" class="btn btn-primary">Print report</a>
        <thead>
        <tr>
            <th>Created At</th>
            <th>Name</th>
            <th>Price</th>
            <th>Total</th>
            <th>Date</th>
        </tr>
        </thead>
        <tbody>

        @foreach($transaksis as $transaction)
            <tr>
                <td>{{ $transaction->created_at }}</td>
                <td>{{ $transaction->nama_produk }}</td>
                <td>{{ $transaction->harga_produk }}</td>
                <td>{{ $transaction->jumlah_produk }}</td>
                <td>{{ $transaction->tanggal }}</td>
            </tr>
        @endforeach

        </tbody>
    </table>
    <!-- ============================================================== -->
<!-- footer -->
<!-- ============================================================== -->
<div class="footer">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                Copyright ?? 2022 Concept. All rights reserved. Dashboard by <a href="https://colorlib.com/wp/">Jimmy</a>.
            </div>

        </div>
    </div>
</div>
<!-- ============================================================== -->
<!-- end footer -->
<!-- ============================================================== -->
    </div>
{{--
    <div class="d-flex justify-content-between">
        {{ $produks->render() }}
    </div> --}}

@endsection
