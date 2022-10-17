
<h2>Laporan Transaksi</h2>
    <table border="1">
        <thead>
        <tr>
            <th>Created At</th>
            <th>Name</th>
            <th>Price</th>
            <th>Total</th>

        </tr>
        </thead>
        <tbody>

        @foreach($transaksis as $transaction)
            <tr>
                <td>{{ $transaction->created_at }}</td>
                <td>{{ $transaction->nama_produk }}</td>
                <td>{{ $transaction->harga_produk }}</td>\
                <td>{{ $transaction->jumlah_produk }}</td>

            </tr>
        @endforeach

        </tbody>
    </table>




