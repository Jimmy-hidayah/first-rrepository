@extends('layouts.app')

@section('content')
<div class="dashboard-wrapper">

    <!-- ============================================================== -->
    <!-- pagehader  -->
    <!-- ============================================================== -->
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="page-header">
                <h3 class="mb-2">Dashboard Product </h3>
                <p class="pageheader-text">Lorem ipsum dolor sit ametllam fermentum ipsum eu porta consectetur adipiscing elit.Nullam vehicula nulla ut egestas rhoncus.</p>
                <div class="page-breadcrumb">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Product </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->

    <div class="d-flex justify-content-between mb-4">
        <h3>Products List</h3>
        <a class="btn btn-success btn-sm" href="{{ route('produk.create') }}">Create New</a>
    </div>

    @if(session()->has('success'))
        <label class="alert alert-success w-100">{{session('success')}}</label>
    @elseif(session()->has('error'))
        <label class="alert alert-danger w-100">{{session('error')}}</label>
    @endif

    <table class="table table-striped">
        <thead>
        <tr>
            <th>Created At</th>
            <th>Name</th>

            <th>Price</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>

        @foreach($produks as $product)
            <tr>
                <td>{{ $product->created_at }}</td>
                <td>{{ $product->nama }}</td>

                <td>{{ $product->harga }}</td>
                <td>
                    <a href="{{ route('produk.edit', $product->id) }}" class="btn btn-success btn-sm">Edit</a>
                    <a href="{{ route('produk.show', $product->id) }}" class="btn btn-info btn-sm">Show</a>
                    <form action="{{ route('produk.destroy', $product->id) }}" method="POST" class="d-inline-block">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                    </form>
                </td>
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
                Copyright © 2022 Concept. All rights reserved. Dashboard by <a href="https://colorlib.com/wp/">Jimmy</a>.
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
