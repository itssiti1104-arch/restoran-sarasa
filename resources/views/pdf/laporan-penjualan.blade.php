<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">

<style>

body{
    font-family: sans-serif;
    font-size: 12px;
}

h1{
    text-align:center;
}

table{
    width:100%;
    border-collapse:collapse;
    margin-top:20px;
}

th,td{
    border:1px solid black;
    padding:8px;
    text-align:center;
}

.summary{
    margin-bottom:20px;
}

</style>

</head>
<body>

<h1>Laporan Penjualan Harian</h1>

<p>
Tanggal :
{{ \Carbon\Carbon::parse($tanggal)->format('d-m-Y') }}
</p>

<div class="summary">

<p>
Total Penjualan :
Rp {{ number_format($totalPenjualan,0,',','.') }}
</p>

<p>
Total Transaksi :
{{ $totalTransaksi }}
</p>

<p>
Rata-rata :
Rp {{ number_format($rataRataTransaksi,0,',','.') }}
</p>

<p>
Menu Terlaris :
{{ $menuTerlaris?->menu?->nama_menu ?? '-' }}
</p>

</div>

<table>

<tr>
    <th>No</th>
    <th>No. Pesanan</th>
    <th>Pelanggan</th>
    <th>Tanggal & Waktu</th>
    <th>Daftar Pesanan</th>
    <th>Total</th>
    <th>Status</th>
</tr>

@foreach($orders as $order)

<tr>

    <td>{{ $loop->iteration }}</td>

    <td>#{{ $order->kode_order }}</td>

    <td>{{ $order->nama_pelanggan }}</td>

    <td>
        {{ $order->created_at->format('d-m-Y H:i') }}
    </td>

    <td>

        @foreach($order->items as $item)

            {{ $item->menu->nama_menu }}
            ({{ $item->jumlah }}x)

            @if(!$loop->last)
                <br>
            @endif

        @endforeach

    </td>

    <td>
        Rp {{ number_format($order->total_harga,0,',','.') }}
    </td>

    <td>
        {{ ucfirst($order->status) }}
    </td>

</tr>

@endforeach

</table>

</body>
</html>