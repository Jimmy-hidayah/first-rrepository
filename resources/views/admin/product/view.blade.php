@extends('layouts.app')

@section('content')
<div class="dashboard-wrapper">
<div class="container-fluid px-4">
    <h1 class="mt-4 mb-4">Product Details</h1>
        <div class="card w-50">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-editable table-nowrap align-middle table-edits">
                        <tr>
                            <td>Name</td>
                            <td>{{ $product->nama }}</td>
                        </tr>
                        <tr>
                            <td>Price</td>
                            <td>{{ $product->harga }}</td>
                        </tr>

                    </table>
                    <a class="btn btn-warning waves-effect waves-light" href="{{ route('produk.index') }}" role="button">Back</a>
                </div>
            </div>
        </div>
</div>
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
