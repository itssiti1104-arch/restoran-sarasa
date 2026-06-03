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

<meta name="viewport"
content="width=device-width, initial-scale=1.0">

<title>Laporan Harian</title>

<link rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"/>

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
rel="stylesheet">

<style>

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:'Poppins', sans-serif;
}

body{
    display:flex;
    background:#f5f5f5;
}

/* SIDEBAR */

.sidebar{
    width:280px;
    min-height:100vh;
    background:#5a0010;
    color:white;
    display:flex;
    flex-direction:column;
    justify-content:space-between;
}

.sidebar-top{
    padding:25px;
}

.logo{
    display:flex;
    align-items:center;
    gap:15px;
    margin-bottom:40px;
}

.logo img{
    width:70px;
}

.logo-text h1{
    font-size:42px;
    line-height:1;
}

.logo-text p{
    font-size:12px;
    letter-spacing:3px;
}

.menu{
    display:flex;
    flex-direction:column;
    gap:18px;
}

.menu a{
    display:flex;
    align-items:center;
    gap:18px;
    color:white;
    text-decoration:none;
    padding:16px 20px;
    font-size:20px;
    font-weight:600;
    border-radius:14px;
    transition:0.3s;
}

.menu a i{
    font-size:34px;
}

.menu a:hover,
.menu .active{
    background:white;
    color:#5a0010;
}

.logout{
    margin-top:20px;
}

.sidebar-bottom{
    border-top:1px solid rgba(255,255,255,0.2);
    padding:25px;
    display:flex;
    align-items:center;
    gap:15px;
}

.sidebar-bottom img{
    width:60px;
    height:60px;
    border-radius:50%;
    object-fit:cover;
}

.user-text p{
    font-size:18px;
}

.user-text h3{
    font-size:28px;
}

/* MAIN */

.main{
    flex:1;
    padding:30px;
}

.header{
    display:flex;
    justify-content:space-between;
    align-items:center;
    margin-bottom:35px;
}

.header h1{
    color:#5a0010;
    font-size:45px;
}

.date{
    border:2px solid #999;
    border-radius:15px;
    padding:15px 25px;
    display:flex;
    align-items:center;
    gap:15px;
    font-size:22px;
    font-weight:600;
    background:white;
}

/* TABLE */

.cards{
    display:flex;
    gap:40px;
    margin-top:30px;
    margin-bottom:35px;
}

.card{
    width:320px;
    background:white;
    border:2px solid #bbb;
    border-radius:20px;
    padding:25px;
    display:flex;
    align-items:center;
    gap:20px;
}

.card i{
    font-size:55px;
    color:#5a0010;
}

.card h2{
    font-size:42px;
}

.card p{
    font-size:20px;
}

.table-box{
    background:white;
    border:2px solid #bbb;
    border-radius:18px;
    overflow:hidden;
}

table{
    width:100%;
    border-collapse:collapse;
}

th{
    background:#efefef;
    padding:20px;
    font-size:22px;
}

td{
    padding:25px 15px;
    text-align:center;
    font-size:20px;
    border-top:2px solid #ccc;
}

.status{
    background:#ffe6c7;
    color:#ff7a00;
    padding:8px 14px;
    border-radius:8px;
    font-size:16px;
    font-weight:600;
}

.btn{
    background:#5a0010;
    color:white;
    text-decoration:none;
    padding:10px 18px;
    border-radius:10px;
    font-size:16px;
    font-weight:600;
}

.status-selesai{
    background:#dff0df;
    color:#2f9e44;
    padding:8px 14px;
    border-radius:8px;
    font-size:16px;
    font-weight:600;
}

</style>
</head>

<body>

@php
use Illuminate\Support\Facades\Auth;
@endphp

<!-- SIDEBAR -->

<div class="sidebar">

    <div class="sidebar-top">

        <div class="logo">

            <img src="/images/logo_putih.png">

            <div class="logo-text">
                <h1>sarasa</h1>
                <p>RESTORAN</p>
            </div>

        </div>

        <div class="menu">

            <a href="/dapur">
                <i class="fa-solid fa-house"></i>
                Beranda
            </a>

            <a href="/pesanan-masuk-dapur">
                <i class="fa-solid fa-clipboard-list"></i>
                Pesanan Masuk
            </a>

            <a href="/riwayat-pesanan-dapur">
                <i class="fa-solid fa-file-lines"></i>
                Riwayat Pesanan
            </a>

            <a href="/laporan-harian-dapur" class="active">
                <i class="fa-solid fa-chart-column"></i>
                Laporan Harian
            </a>

            <a href="/logout" class="logout">
                <i class="fa-solid fa-right-from-bracket"></i>
                Logout
            </a>

        </div>

    </div>

    <div class="sidebar-bottom">

        <img src="https://cdn-icons-png.flaticon.com/512/3135/3135715.png">

        <div class="user-text">
            <p>Dapur</p>
            <h3>{{ Auth::user()->nama }}</h3>
        </div>

    </div>

</div>

<!-- MAIN -->

<div class="main">

    <div class="header">

        <h1>Laporan Harian</h1>

        <div class="date">

            <i class="fa-regular fa-calendar"></i>

            {{ now()->translatedFormat('d F Y') }}

        </div>

    </div>

    <div class="cards">

        <div class="card">

            <i class="fa-solid fa-utensils"></i>

            <div>
                <p>Total Pesanan</p>
                <h2>{{ $totalPesanan }}</h2>
                <p>Pesanan</p>
            </div>

        </div>

        <div class="card">

            <i class="fa-solid fa-circle-check"></i>

            <div>
                <p>Pesanan Selesai</p>
                <h2>{{ $pesananSelesai }}</h2>
                <p>Selesai</p>
            </div>

        </div>

        <div class="card">

            <i class="fa-solid fa-clock"></i>

            <div>
                <p>Rata-rata Waktu Masak</p>
                <h2>{{ round($rataRataMasak ?? 0) }}</h2>
                <p>Menit</p>
            </div>

        </div>

    </div>

    <div class="table-box">

        <table>

            <tr>
                <th>No</th>
                <th>No. Pesanan</th>
                <th>Meja</th>
                <th>Pelanggan</th>
                <th>Waktu</th>
                <th>Daftar Pesanan</th>
                <th>Total</th>
                <th>Status</th>
            </tr>

            @foreach($orders as $order)

            <tr>

            <td>{{ $loop->iteration }}</td>

            <td>#{{ $order->kode_order }}</td>

            <td>Meja {{ $order->nomor_meja }}</td>

            <td>{{ $order->nama_pelanggan }}</td>

            <td>{{ $order->created_at->format('H:i') }}</td>

            <td>
                {{ $order->items->count() }} Menu
            </td>

            <td>
                Rp {{ number_format($order->total_harga,0,',','.') }}
            </td>

            <td>
                <span class="status-selesai">
                    Selesai
                </span>
            </td>

            </tr>

            @endforeach

        </table>

    </div>

</div>

</body>
</html>