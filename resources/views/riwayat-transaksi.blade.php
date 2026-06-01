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

<title>Pesanan Baru</title>

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

/* POPUP STRUK */

.modal{
    display:none;
    position:fixed;
    inset:0;
    background:rgba(0,0,0,.45);
    justify-content:center;
    align-items:center;
    z-index:9999;
}

.struk-popup{
    width:560px;
    background:white;
    border:4px solid #b5b5b5;
    border-radius:20px;
    padding:25px;
    position:relative;

    font-family:'Courier New', monospace;
}

.struk-popup *{
    font-family:'Courier New', monospace;
}

.close-btn{
    position:absolute;
    top:10px;
    right:15px;
    font-size:28px;
    cursor:pointer;
}

.struk-header{
    text-align:center;
}

.struk-header img{
    width:220px;
}

.struk-header p{
    margin-top:10px;
    font-size:16px;
    line-height:1.5;
}

.struk-line{
    border-top:4px solid #ddd;
    margin:15px 0;
}

.struk-info p{
    display:flex;
    justify-content:space-between;
    margin-bottom:10px;
    font-size:18px;
}

.struk-table{
    width:100%;
    border-collapse:collapse;
}

.struk-table th,
.struk-table td{
    border:none;
    padding:6px 0;
    font-size:18px;
    text-align:left;
}

.struk-table th{
    font-weight:normal;
}

.struk-right{
    text-align:right;
}

.struk-total-row{
    display:flex;
    justify-content:space-between;
    margin:12px 0;
    font-size:18px;
}

.struk-footer{
    text-align:center;
    font-size:18px;
    line-height:1.6;
    margin-top:10px;
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

            <a href="/kasir">
                <i class="fa-solid fa-house"></i>
                Beranda
            </a>

            <a href="/pesanan-baru">
                <i class="fa-solid fa-clipboard-list"></i>
                Pesanan Baru
            </a>

            <a href="/riwayat-transaksi" class="active">
                <i class="fa-solid fa-file-invoice-dollar"></i>
                Riwayat Transaksi
            </a>

            <a href="#">
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

        <h1>Pesanan Baru</h1>

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

                <td>#{{ $order->kode_order }}</td>

                <td>Meja {{ $order->nomor_meja }}</td>

                <td>{{ $order->nama_pelanggan }}</td>

                <td>
                    {{ $order->created_at->format('H:i') }}
                </td>

                <td>
                    {{ $order->items->count() }} Menu
                </td>

                <td>
                    Rp {{ number_format($order->total_harga,0,',','.') }}
                </td>

                <td>
                    <span class="status">
                        {{ $order->status }}
                    </span>
                </td>

                <td>

                    <button
                        class="btn"
                        onclick='openStrukModal(
                            {{ $order->id }},
                            "{{ $order->kode_order }}",
                            "{{ $order->nomor_meja }}",
                            "{{ $order->created_at->format("d/m/Y H:i") }}",
                            "{{ Auth::user()->nama }}",
                            "{{ number_format($order->total_harga,0,",",".") }}",
                            "{{ number_format($order->uang_diterima,0,",",".") }}",
                            "{{ number_format($order->kembalian,0,",",".") }}"
                        )'
                    >
                        <i class="fa-solid fa-eye"></i>
                        Lihat Struk
                    </button>

                    <div
                        id="order{{ $order->id }}"
                        style="display:none"
                    >
                        @foreach($order->items as $item)

                            <div
                                class="item"
                                data-menu="{{ $item->menu->nama_menu }}"
                                data-jumlah="{{ $item->jumlah }}"
                                data-harga="{{ number_format($item->harga,0,',','.') }}"
                                data-subtotal="{{ number_format($item->subtotal,0,',','.') }}"
                            >
                            </div>

                        @endforeach
                    </div>

                </td>

            </tr>

            @endforeach

        </table>

    </div>

</div>

<div id="strukModal" class="modal">

    <div class="struk-popup">

        <span
            class="close-btn"
            onclick="closeStrukModal()"
        >
            &times;
        </span>

        <div class="struk-header">

            <img src="/images/logo_maroon.png">

            <p>
                Jl. Kuliner No. 123, Sumenep
                <br>
                Telp. 0857 4566 7533
            </p>

        </div>

        <div class="struk-line"></div>

        <div id="strukContent"></div>

    </div>

</div>

<script>

function openStrukModal(
    id,
    kode,
    meja,
    tanggal,
    kasir,
    total,
    uangDiterima,
    kembalian
){

    let items =
        document.querySelectorAll(
            '#order'+id+' .item'
        );

    let menuRows = '';

    items.forEach(item => {

        menuRows += `
        <tr>
            <td>${item.dataset.menu}</td>
            <td>${item.dataset.jumlah}</td>
            <td>Rp ${item.dataset.harga}</td>
            <td>Rp ${item.dataset.subtotal}</td>
        </tr>
        `;

    });

    document.getElementById('strukContent').innerHTML = `

        <div class="struk-info">

            <p>
                <b>No. Pesanan</b>
                <span>${kode}</span>
            </p>

            <p>
                <b>Meja</b>
                <span>${meja}</span>
            </p>

            <p>
                <b>Tanggal</b>
                <span>${tanggal}</span>
            </p>

            <p>
                <b>Kasir</b>
                <span>${kasir}</span>
            </p>

        </div>

        <div class="struk-line"></div>

        <table class="struk-table">

            <tr>
                <th>Menu</th>
                <th>Jumlah</th>
                <th>Harga</th>
                <th>Subtotal</th>
            </tr>

            ${menuRows}

        </table>

        <div class="struk-line"></div>

        <div class="struk-total-row">
            <span>Total</span>
            <span>Rp ${total}</span>
        </div>

        <div class="struk-total-row">
            <span>Uang Diterima</span>
            <span>Rp ${uangDiterima}</span>
        </div>

        <div class="struk-total-row">
            <span>Kembalian</span>
            <span>Rp ${kembalian}</span>
        </div>

        <div class="struk-line"></div>

        <div class="struk-footer">
            Terima Kasih<br>
            Silakan Kembali Lagi
        </div>

    `;

    document.getElementById(
        'strukModal'
    ).style.display = 'flex';

}

function closeStrukModal(){

    document.getElementById(
        'strukModal'
    ).style.display = 'none';

}

</script>

</body>
</html>