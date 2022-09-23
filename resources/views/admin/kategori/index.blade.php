@extends('layouts.app')

@section('content')
<div class="dashboard-wrapper">

    <!-- ============================================================== -->
    <!-- pagehader  -->
    <!-- ============================================================== -->
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="page-header">
                <h3 class="mb-2">Admin Dashboard </h3>
                <p class="pageheader-text">Lorem ipsum dolor sit ametllam fermentum ipsum eu porta consectetur adipiscing elit.Nullam vehicula nulla ut egestas rhoncus.</p>
                <div class="page-breadcrumb">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Admin Dashboard </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->

    <div class="row">
        <!-- ============================================================== -->
        <!-- top selling products  -->
        <!-- ============================================================== -->
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card">
                <h5 class="card-header">Top Selling Products</h5>
                <a href="{{ route('kategori.create') }}" class="btn btn-primary btn-lg rounded mb-3">Create New Category</a>
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table">
                            <thead class="bg-light">
                                <tr class="border-0">
                                    <th class="border-0">#</th>

                                    <th class="border-0">Category Name</th>
                                    <th class="border-0">Action</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($kategoris as $kategori )

                                <tr>
                                    <td>1</td>

                                    <td>{{ $kategori->name }} </td>
                                    <td class="d-flex">
                                        <a class="mr-3 btn btn-success" href="{{ route('kategori.edit', $kategori->id) }}"><i class="bi bi-pencil-square"></i></a>
                                        <form action="{{ route('kategori.destroy', $kategori->id) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                        <button class="btn btn-danger" type="submit" ><i class="bi bi-trash3-fill"></i></button>
                                    </form>
                                    </td>
                                </tr>
                                @endforeach


                            </tbody>
                        </table>
                    </div>
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
