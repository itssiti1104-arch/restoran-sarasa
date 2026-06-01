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

<title>Dapur</title>

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

/* HEADER */

.header{
    display:flex;
    justify-content:space-between;
    align-items:flex-start;
    margin-bottom:35px;
}

.header h1{
    font-size:52px;
    color:#5a0010;
    margin-bottom:8px;
}

.header p{
    font-size:28px;
    color:#666;
}

.date-box{
    background:white;
    border:2px solid #222;
    border-radius:20px;
    padding:18px 25px;
    display:flex;
    align-items:center;
    gap:15px;
}

.date-box i{
    font-size:36px;
    color:#333;
}

.date-box h3{
    font-size:18px;
}

.date-box p{
    font-size:16px;
    color:#666;
}

/* CARD */

.card-grid{
    display:grid;
    grid-template-columns:repeat(4,1fr);
    gap:20px;
    margin-bottom:35px;
}

.card{
    background:white;
    border:2px solid #222;
    border-radius:20px;
    padding:22px;
    display:flex;
    align-items:center;
    gap:18px;
}

.card-icon{
    width:90px;
    height:90px;
    border-radius:50%;
    background:#f9d7dd;
    display:flex;
    align-items:center;
    justify-content:center;
}

.card-icon i{
    font-size:46px;
    color:#5a0010;
}

.card-text h2{
    font-size:22px;
    margin-bottom:6px;
}

.card-text h1{
    font-size:58px;
    line-height:1;
}

.card-text p{
    font-size:20px;
    color:#666;
}

</style>
</head>
<body>

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

            <a href="/dapur" class="active">
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

            <a href="laporan-harian-dapur">
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

    <!-- HEADER -->

    <div class="header">

        <div>

            <h1>
                Selamat datang,
                {{ Auth::user()->nama }}! 👋🏻
            </h1>

            <p>
                Kelola dan proses pesanan dari pelanggan
            </p>

        </div>

        <div class="date-box">

            <i class="fa-regular fa-calendar-days"></i>

            <div>
                <h3>{{ now()->translatedFormat('d F Y') }}</h3>
            </div>

        </div>

    </div>

    <!-- CARD -->

    <div class="card-grid">

        <div class="card">

            <div class="card-icon">
                <i class="fa-regular fa-clipboard"></i>
            </div>

            <div class="card-text">
                <h2>Pesanan Masuk</h2>
                <h1>{{ $pesananMasuk }}</h1>
                <p>Pesanan</p>
            </div>

        </div>

        <div class="card">

            <div class="card-icon">
                <i class="fa-solid fa-bowl-food"></i>
            </div>

            <div class="card-text">
                <h2>Dalam proses</h2>
                <h1>{{ $diproses }}</h1>
                <p>Pesanan</p>
            </div>

        </div>

        <div class="card">

            <div class="card-icon">
                <i class="fa-solid fa-bell-concierge"></i>
            </div>

            <div class="card-text">
                <h2>Siap Diantar</h2>
                <h1>{{ $siapDiantar }}</h1>
                <p>Pesanan</p>
            </div>

        </div>

        <div class="card">

            <div class="card-icon">
                <i class="fa-regular fa-circle-check"></i>
            </div>

            <div class="card-text">
                <h2>Selesai Hari Ini</h2>
                <h1>{{ $selesaiHariIni }}</h1>
                <p>Pesanan</p>
            </div>

        </div>

    </div>

</div>

</body>
</html>