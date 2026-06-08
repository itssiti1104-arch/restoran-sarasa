<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">

<meta name="viewport"
content="width=device-width, initial-scale=1.0">

<title>Pesanan Masuk</title>

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

.top{
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

/* STATUS */

.status-konfirmasi{
    background:#ffe6c7;
    color:#ff7a00;
    padding:8px 14px;
    border-radius:8px;
    font-size:16px;
    font-weight:600;
}

.status-proses{
    background:#e3dcff;
    color:#5b46d6;
    padding:8px 14px;
    border-radius:8px;
    font-size:16px;
    font-weight:600;
}

.status-selesai{
    background:#d8ffd8;
    color:#1f9d3a;
    padding:8px 14px;
    border-radius:8px;
    font-size:16px;
    font-weight:600;
}

/* BUTTON */

.btn{
    background:#d9d9d9;
    color:black;
    text-decoration:none;
    padding:10px 18px;
    border-radius:10px;
    font-size:16px;
    font-weight:600;
}

</style>
</head>

<body>

<div class="sidebar">

    <div class="top">

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

            <a href="/riwayat-pesanan-dapur" class="active">
                <i class="fa-solid fa-clock-rotate-left"></i>
                Riwayat Pesanan
            </a>

            <a href="/update-stok">
                <i class="fa-solid fa-box"></i>
                Update Stok
            </a>

            <a href="/laporan-harian-dapur">
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

        <img src="https://cdn-icons-png.flaticon.com/512/149/149071.png">

        <div>
            <p>Dapur</p>
            <h3>{{ auth()->user()->nama }}</h3>
        </div>

    </div>

</div>

<!-- MAIN -->

<div class="main">

    <div class="header">

        <h1>Riwayat Pesanan</h1>

        <div class="date">

            <i class="fa-regular fa-calendar"></i>

            {{ now()->translatedFormat('d F Y') }}

        </div>

    </div>

    <div class="table-box">

        <table>

            <tr>
                <th>No. Pesanan</th>
                <th>Meja</th>
                <th>Pelanggan</th>
                <th>Waktu</th>
                <th>Daftar Pesanan</th>
                <th>Total</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>

            @foreach($orders as $order)

            <tr>

                <td>
                    #{{ $order->kode_order }}
                </td>

                <td>
                    Meja {{ $order->nomor_meja }}
                </td>

                <td>
                    {{ $order->nama_pelanggan }}
                </td>

                <td>
                    {{ $order->updated_at ? $order->updated_at->format('H:i') : '--' }}
                </td>

                <td>
                    {{ $order->items->count() }} Menu
                </td>

                <td>
                    Rp {{ number_format($order->total_harga,0,',','.') }}
                </td>

                <td>

                    @if($order->status == 'pembayaran dikonfirmasi')

                        <span class="status-konfirmasi">
                            Pembayaran Dikonfirmasi
                        </span>

                    @elseif($order->status == 'dalam proses')

                        <span class="status-proses">
                            Dalam Proses
                        </span>

                    @elseif($order->status == 'selesai')

                        <span class="status-selesai">
                            Selesai
                        </span>

                    @endif

                </td>

                <td>

                    <a
                        href="/detail-pesanan-dapur/{{ $order->id }}"
                        class="btn"
                    >
                        <i class="fa-solid fa-eye"></i>
                        Detail
                    </a>

                </td>

            </tr>

            @endforeach

        </table>

    </div>

</div>

</body>
</html>