<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">

<meta http-equiv="Cache-Control"
content="no-cache, no-store, must-revalidate">

<meta http-equiv="Pragma"
content="no-cache">

<meta http-equiv="Expires"
content="0">

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Detail Pesanan</title>

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

<style>

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:'Poppins', sans-serif;
}

body{
    background:#f6f6f6;
    padding:35px;
}

.back{
    text-decoration:none;
    color:#5a0010;
    font-size:22px;
    font-weight:600;
}

.header{
    display:flex;
    justify-content:space-between;
    align-items:flex-start;
    margin-top:20px;
    margin-bottom:30px;
}

.header h1{
    font-size:55px;
}

.kode{
    text-align:right;
}

.kode p{
    color:#999;
    font-size:20px;
    font-weight:600;
}

.kode h2{
    color:#5a0010;
    font-size:55px;
}

.container{
    display:flex;
    gap:40px;
}

.card{
    background:white;
    border:2px solid #bbb;
    border-radius:18px;
    padding:30px;
}

.left{
    width:42%;
}

.right{
    width:58%;
}

.card h2{
    font-size:32px;
    margin-bottom:30px;
}

.info{
    display:flex;
    justify-content:space-between;
    margin-bottom:25px;
    font-size:22px;
}

.btn{
    margin-top:180px;
    width:100%;
    height:75px;
    border:none;
    border-radius:15px;
    background:#6d0f1d;
    color:white;
    font-size:28px;
    font-weight:600;
    cursor:pointer;
}

.button-row{
    margin-top:180px;
    display:flex;
    gap:15px;
}

.process-btn{
    width:250px;
    height:70px;
    border:none;
    border-radius:15px;
    background:#5a0010;
    color:white;
    font-size:22px;
    font-weight:600;
    cursor:pointer;
}

.cancel-btn{
    width:200px;
    height:70px;
    border:4px solid #5a0010;
    border-radius:15px;
    background:white;
    color:#5a0010;
    font-size:22px;
    font-weight:600;
    cursor:pointer;
}

.back-btn{
    margin-top:30px;
    display:inline-flex;
    align-items:center;
    gap:10px;
    text-decoration:none;
    color:#5a0010;
    font-size:28px;
    font-weight:600;
}

table{
    width:100%;
    border-collapse:collapse;
    font-size:20px;
}

th{
    background:#d9d9d9;
    padding:15px;
}

td{
    padding:15px;
    text-align:center;
    border-bottom:2px solid #ccc;
}

.total{
    display:flex;
    justify-content:space-between;
    margin-top:250px;
    font-size:28px;
    font-weight:700;
}

.harga{
    color:#5a0010;
}

</style>
</head>
<body>

<div class="header">

    <h1>Detail Pesanan</h1>

    <div class="kode">
        <p>No Pesanan</p>
        <h2>#{{ $order->kode_order }}</h2>
    </div>

</div>

<div class="container">

    <!-- LEFT -->

    <div class="card left">

        <h2>Informasi Pesanan</h2>

        <div class="info">
            <span>Pelanggan</span>
            <span>{{ $order->nama_pelanggan }}</span>
        </div>

        <div class="info">
            <span>Meja</span>
            <span>Meja {{ $order->nomor_meja }}</span>
        </div>

        <div class="info">
            <span>Waktu Pesan</span>
            <span>
                {{ $order->created_at->format('d M Y, H:i') }}
            </span>
        </div>

        <div class="info">
            <span>Jumlah Pesan</span>
            <span>{{ $order->items->count() }} Item</span>
        </div>

        <div class="button-row">

            <a href="/konfirmasi-pembayaran/{{ $order->id }}">
                <button type="button" class="btn process-btn">
                    Proses Pembayaran
                </button>
            </a>

            <form action="/batalkan-pesanan/{{ $order->id }}" method="POST">
                @csrf

                <button class="btn cancel-btn">
                    Batalkan
                </button>
            </form>

        </div>

        <a href="/pesanan-baru" class="back-btn">
            <i class="fa-solid fa-chevron-left"></i>
            Kembali
        </a>

</div>

    <!-- RIGHT -->

    <div class="card right">

        <h2>Daftar Pesanan</h2>

        <table>

            <tr>
                <th>No</th>
                <th>Menu</th>
                <th>Jumlah</th>
                <th>Harga</th>
                <th>Subtotal</th>
            </tr>

            @foreach($order->items as $item)

            <tr>

                <td>{{ $loop->iteration }}</td>

                <td>{{ $item->menu->nama_menu }}</td>

                <td>{{ $item->jumlah }}</td>

                <td>
                    Rp {{ number_format($item->harga,0,',','.') }}
                </td>

                <td>
                    Rp {{ number_format($item->subtotal,0,',','.') }}
                </td>

            </tr>

            @endforeach

        </table>

        <div class="total">
            <span>Total</span>
            <span class="harga">
                Rp {{ number_format($order->total_harga,0,',','.') }}
            </span>
        </div>

    </div>

</div>

</body>
</html>