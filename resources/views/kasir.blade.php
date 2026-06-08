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

<title>Kasir</title>

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
    width:300px;
    min-height:100vh;
    background:#5a0010;
    color:white;
    display:flex;
    flex-direction:column;
    justify-content:space-between;
}

.top-sidebar{
    padding:25px;
}

.logo{
    display:flex;
    align-items:center;
    gap:15px;
    margin-bottom:50px;
}

.logo img{
    width:75px;
}

.logo-text h1{
    font-size:42px;
    line-height:1;
}

.logo-text p{
    letter-spacing:3px;
    font-size:12px;
}

.menu{
    display:flex;
    flex-direction:column;
    gap:20px;
}

.menu a{
    color:white;
    text-decoration:none;
    font-size:22px;
    display:flex;
    align-items:center;
    gap:18px;
    padding:15px 20px;
    border-radius:15px;
    transition:0.3s;
}

.menu a:hover,
.menu .active{
    background:white;
    color:#5a0010;
}

.menu i{
    font-size:30px;
}

.bottom{
    border-top:2px solid white;
    padding:25px;
    display:flex;
    align-items:center;
    gap:15px;
}

.bottom img{
    width:60px;
    height:60px;
    border-radius:50%;
}

.bottom h3{
    font-size:20px;
}

.bottom p{
    font-size:14px;
}

/* MAIN */

.main{
    flex:1;
    padding:30px;
}

.header{
    display:flex;
    justify-content:space-between;
    align-items:flex-start;
    margin-bottom:35px;
}

.header h1{
    color:#5a0010;
    font-size:45px;
}

.header p{
    font-size:20px;
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

/* CARD */

.cards{
    display:flex;
    gap:40px;
    margin-top:30px;
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

</style>
</head>

<body>

@php
use Illuminate\Support\Facades\Auth;
@endphp

<!-- SIDEBAR -->

<div class="sidebar">

    <div class="top-sidebar">

        <div class="logo">

            <img src="/images/logo_putih.png">

            <div class="logo-text">
                <h1>sarasa</h1>
                <p>RESTORAN</p>
            </div>

        </div>

        <div class="menu">

            <a href="/kasir" class="active">
                <i class="fa-solid fa-house"></i>
                Beranda
            </a>

            <a href="/pesanan-baru">
                <i class="fa-solid fa-clipboard-list"></i>
                Pesanan Baru
            </a>

            <a href="/riwayat-transaksi">
                <i class="fa-solid fa-file-invoice-dollar"></i>
                Riwayat Transaksi
            </a>

            <a href="/laporan-harian">
                <i class="fa-solid fa-chart-column"></i>
                Laporan Harian
            </a>

            <a href="/logout">
                <i class="fa-solid fa-right-from-bracket"></i>
                Logout
            </a>

        </div>

    </div>

    <div class="bottom">

        <img src="https://cdn-icons-png.flaticon.com/512/847/847969.png">

        <div>
            <p>Kasir</p>
            <h3>{{ Auth::user()->nama }}</h3>
        </div>

    </div>

</div>

<!-- MAIN -->

<div class="main">

    <div class="header">

        <div>

            <h1>
                Selamat datang, {{ Auth::user()->nama }}! 👋🏻
            </h1>

            <p>
                Berikut ringkasan aktivitas hari ini.
            </p>

        </div>

        <div class="date">

            <i class="fa-regular fa-calendar"></i>

            {{ now()->translatedFormat('d F Y') }}

        </div>

    </div>

    <div class="cards">

        <div class="card">

            <i class="fa-solid fa-clipboard-list"></i>

            <div>
                <p>Pesanan Baru</p>
                <h2>{{ $jumlahPesanan }}</h2>
                <p>Pesanan</p>
            </div>

        </div>

        <div class="card">

            <i class="fa-solid fa-file-invoice-dollar"></i>

            <div>
                <p>Transaksi Selesai</p>
                <h2>{{ $pesananDiproses }}</h2>
                <p>Transaksi</p>
            </div>

        </div>

        <div class="card">

            <i class="fa-solid fa-chart-column"></i>

            <div>
                <p>Total Penjualan</p>
                <h2>
                    Rp {{ number_format($pendapatan,0,',','.') }}
                </h2>
            </div>

        </div>

    </div>

</div>

</body>
</html>