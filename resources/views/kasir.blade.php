<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Kasir</title>

<link rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"/>

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

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

/* TABLE */

.title{
    font-size:42px;
    margin-bottom:15px;
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

</style>
</head>
<body>

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

            <a href="#">
                <i class="fa-solid fa-file-invoice-dollar"></i>
                Riwayat Transaksi
            </a>

            <a href="#">
                <i class="fa-solid fa-chart-column"></i>
                Laporan Harian
            </a>

            <a href="#">
                <i class="fa-solid fa-right-from-bracket"></i>
                Logout
            </a>

        </div>

    </div>

    <div class="bottom">

        <img src="https://cdn-icons-png.flaticon.com/512/847/847969.png">

        <div>
            <p>Kasir</p>
            <h3>Siti Aulia</h3>
        </div>

    </div>

</div>

<!-- MAIN -->

<div class="main">

    <div class="header">

        <div>
            <h1>Selamat datang, Siti Aulia! 👋🏻</h1>
            <p>Berikut ringkasan aktivitas hari ini.</p>
        </div>

        <div class="date">
            <i class="fa-regular fa-calendar"></i>
            19 Mei 2024
        </div>

    </div>

    <!-- CARDS -->

    <div class="cards">

        <div class="card">

            <i class="fa-solid fa-clipboard-list"></i>

            <div>
                <p>Pesanan Masuk</p>
                <h2>5</h2>
                <p>Pesanan</p>
            </div>

        </div>

        <div class="card">

            <i class="fa-solid fa-table"></i>

            <div>
                <p>Meja Terisi</p>
                <h2>8 / 20</h2>
                <p>Pesanan</p>
            </div>

        </div>

    </div>

    <!-- TABLE -->

    <h1 class="title">Pesanan Masuk</h1>

    <div class="table-box">

        <table>

            <tr>
                <th>No. Pesanan</th>
                <th>Meja</th>
                <th>Pelanggan</th>
                <th>Waktu</th>
                <th>Total</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>

            <tr>
                <td>#ORD-20240519-0012</td>
                <td>Meja 5</td>
                <td>Dina Rahma Firzana</td>
                <td>12.25</td>
                <td>Rp 23.000</td>
                <td>
                    <span class="status">
                        Menunggu Pembayaran
                    </span>
                </td>

                <td>
                    <a href="/detail-pesanan-kasir" class="btn">
                        Proses
                    </a>
                </td>
            </tr>

            <tr>
                <td>#ORD-20240519-0013</td>
                <td>Meja 3</td>
                <td>Siti Nafi'ah</td>
                <td>12.28</td>
                <td>Rp 44.000</td>
                <td>
                    <span class="status">
                        Menunggu Pembayaran
                    </span>
                </td>

                <td>
                    <a href="/detail-pesanan-kasir" class="btn">
                        Proses
                    </a>
                </td>
            </tr>

        </table>

    </div>

</div>

</body>
</html>