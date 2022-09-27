@extends('layouts.app')

@section('content')
<div class="dashboard-wrapper">



    <div class="row">
        <!-- ============================================================== -->
        <!-- top selling products  -->
        <!-- ============================================================== -->
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card">
                <h5 class="card-header">Your Categories</h5>
                <div class="card-body p-0">
                    <form action="{{ route('kategori.update', $kategori->id) }}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                          <label for="exampleInputEmail1">Category</label>
                          <input type="text" name="name" value="{{ $kategori->name }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder=" edit your category">
                        </div>

                        <div class="form-group form-check">
                          <input type="checkbox" class="form-check-input" id="exampleCheck1">
                          <label class="form-check-label" for="exampleCheck1">create category</label>
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
