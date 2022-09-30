@extends('layouts.app')

@section('content')
<div class="dashboard-wrapper">
    <table class="table table-striped">
        <thead>
        <tr>
            <th>Created At</th>
            <th>Name</th>

            <th>Price</th>
        </tr>
        </thead>
        <tbody>

        {{-- @foreach($produks as $product)
            <tr>
                <td>{{ $product->created_at }}</td>
                <td>{{ $product->nama }}</td>

                <td>{{ $product->harga }}</td>

            </tr>
        @endforeach --}}

        </tbody>
    </table>

</div>


@endsection
