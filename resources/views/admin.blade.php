<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">

<meta name="viewport"
content="width=device-width, initial-scale=1.0">

<title>Admin</title>

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
    width:70px;
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
    display:flex;
    align-items:center;
    gap:18px;
    padding:15px 20px;
    border-radius:15px;
    font-size:22px;
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
}

.logout{
    color:white;
    text-decoration:none;
    display:flex;
    align-items:center;
    gap:15px;
    font-size:22px;
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
    font-size:48px;
}

.header p{
    font-size:22px;
}

.date{
    border:2px solid #999;
    border-radius:15px;
    padding:15px 25px;
    background:white;
    font-size:22px;
    font-weight:600;
    display:flex;
    align-items:center;
    gap:15px;
}

/* CARD */

.cards{
    display:flex;
    gap:25px;
    flex-wrap:wrap;
}

.card{
    width:260px;
    background:white;
    border:2px solid #bbb;
    border-radius:20px;
    padding:25px;
    display:flex;
    align-items:center;
    gap:20px;
}

.icon{
    width:80px;
    height:80px;
    border-radius:50%;
    background:#ffdfe4;
    display:flex;
    align-items:center;
    justify-content:center;
}

.icon i{
    font-size:38px;
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

            <a href="/admin" class="active">
                <i class="fa-solid fa-house"></i>
                Beranda
            </a>

            <a href="/kelola-menu">
                <i class="fa-solid fa-utensils"></i>
                Kelola Menu
            </a>

            <a href="#">
                <i class="fa-solid fa-chart-column"></i>
                Laporan Penjualan
            </a>

            <a href="/manajemen-akun">
                <i class="fa-regular fa-user"></i>
                Manajemen Akun
            </a>

            <a href="/logout">
                <i class="fa-solid fa-right-from-bracket"></i>
                Logout
            </a>

        </div>

    </div>

</div>

<div class="main">

    <div class="header">

        <div>

            <h1>
                Selamat Datang, {{ Auth::user()->nama }} 👋🏻
            </h1>

            <p>
                Berikut ringkasan sistem restoran
            </p>

        </div>

        <div class="date">

            <i class="fa-regular fa-calendar"></i>

            {{ now()->translatedFormat('d F Y') }}

        </div>

    </div>

    <div class="cards">

        <div class="card">

            <div class="icon">
                <i class="fa-solid fa-utensils"></i>
            </div>

            <div>
                <p>Total Menu</p>
                <h2>{{ $totalMenu }}</h2>
            </div>

        </div>

        <div class="card">

            <div class="icon">
                <i class="fa-solid fa-clipboard-list"></i>
            </div>

            <div>
                <p>Total Pesanan</p>
                <h2>{{ $totalPesanan }}</h2>
            </div>

        </div>

        <div class="card">

            <div class="icon">
                <i class="fa-solid fa-wallet"></i>
            </div>

            <div>
                <p>Pendapatan</p>

                <h2 style="font-size:26px">
                    Rp {{ number_format($pendapatan,0,',','.') }}
                </h2>

            </div>

        </div>

        <div class="card">

            <div class="icon">
                <i class="fa-regular fa-user"></i>
            </div>

            <div>
                <p>Total Akun</p>
                <h2>{{ $totalUser }}</h2>
            </div>

        </div>

    </div>

</div>

</body>
</html>