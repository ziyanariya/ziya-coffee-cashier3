<body>
    <h2>Cafe ziya</h2>
    <h6>Jl.MockingJay No. 45, 34234</h6>
    <hr>
    <h5>No. Faktur : {{ $transaksi->id }}</h5>
    <h5>{{ $transaksi->tanggal}}</h5>
    <table border="0">
        <thead>
            <tr>
                <td>Qty</td>
                <td>Item</td>
                <td>harga</td>
                <td>Total</td>
            </tr>
        </thead>
        <tbody>
            @foreach ($transaksi->detailTransaksi as $item)
            <tr>
                <td>{{ $item->jumlah }}</td>
                <td>{{ $item->menu->nama_menu }}</td>
                <td>{{ $number_format($item->menu->harga,0,",",".") }}</td>
                <td>{{ $number_format($item->subtotal,0,",","," )}}</td>
            </tr>
            @endforeach
        </tbody>>
        <tfoot>
            <tr>
                <td colspan="3">Total</td>
                <td>{{ $number->format($transaksi->total_harga,0,",",".") }}</td>
            </tr>
        </tfoot>
    </table>
</body>
