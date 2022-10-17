
<h2>Laporan Produk</h2>
    <table border="1">
        <thead>
        <tr>
            <th>Created At</th>
            <th>Name</th>

            <th>Price</th>
        </tr>
        </thead>
        <tbody>

        @foreach($produks as $product)
            <tr>
                <td>{{ $product->created_at }}</td>
                <td>{{ $product->nama }}</td>

                <td>{{ $product->harga }}</td>

            </tr>
        @endforeach

        </tbody>
    </table>
