<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">

<meta name="viewport"
content="width=device-width, initial-scale=1.0">

<title>Detail Pesanan</title>

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
    background:#f5f5f5;
    padding:30px;
}

.title{
    font-size:45px;
    color:#5a0010;
    margin-bottom:25px;
}

.top-card{
    background:white;
    border:2px solid #bbb;
    border-radius:20px;
    padding:25px 35px;
    display:flex;
    justify-content:space-between;
    align-items:center;
    margin-bottom:25px;
}

.order-code{
    display:flex;
    align-items:center;
    gap:20px;
    color:#5a0010;
    font-size:28px;
    font-weight:700;
}

.status{
    padding:10px 18px;
    border-radius:10px;
    font-size:18px;
    font-weight:700;
}

.konfirmasi{
    background:#ffe6c7;
    color:#ff7a00;
}

.proses{
    background:#e3dcff;
    color:#5b46d6;
}

.selesai{
    background:#d8ffd8;
    color:#1f9d3a;
}

.content{
    display:grid;
    grid-template-columns:1fr 1fr;
    gap:25px;
    margin-bottom:25px;
}

.box{
    background:white;
    border:2px solid #bbb;
    border-radius:20px;
    padding:30px;
}

.box h2{
    margin-bottom:20px;
    color:#5a0010;
}

.info{
    display:flex;
    margin-bottom:18px;
    font-size:20px;
}

.info label{
    width:180px;
    font-weight:600;
}

.steps{
    display:flex;
    justify-content:center;
    align-items:center;
    gap:25px;
    margin:35px 0;
}

.circle{
    width:70px;
    height:70px;
    border-radius:50%;
    background:#ddd;
    display:flex;
    justify-content:center;
    align-items:center;
    font-size:30px;
    font-weight:700;
}

.active{
    background:#5a0010;
    color:white;
}

.line{
    width:80px;
    height:3px;
    background:#ccc;
}

.action{
    text-align:center;
}

.action button{
    background:#5a0010;
    color:white;
    border:none;
    padding:18px 40px;
    border-radius:15px;
    font-size:22px;
    font-weight:700;
    cursor:pointer;
}

.menu-box{
    background:white;
    border:2px solid #bbb;
    border-radius:20px;
    padding:25px;
}

table{
    width:100%;
    border-collapse:collapse;
    margin-top:20px;
}

th{
    background:#efefef;
    padding:18px;
    font-size:20px;
}

td{
    padding:18px;
    border-top:2px solid #ddd;
    text-align:center;
    font-size:18px;
}

.back{
    display:inline-block;
    margin-top:25px;
    background:white;
    border:2px solid #5a0010;
    color:#5a0010;
    padding:12px 22px;
    border-radius:12px;
    text-decoration:none;
    font-weight:700;
}

</style>
</head>
<body>

<h1 class="title">Detail Pesanan</h1>

<div class="top-card">

    <div class="order-code">

        <i class="fa-solid fa-clipboard-list"></i>

        #{{ $order->kode_order }}

    </div>

    @if($order->status == 'pembayaran dikonfirmasi')

        <span class="status konfirmasi">
            Pembayaran Dikonfirmasi
        </span>

    @elseif($order->status == 'dalam proses')

        <span class="status proses">
            Dalam Proses
        </span>

    @else

        <span class="status selesai">
            Selesai
        </span>

    @endif

</div>

<div class="content">

    <div class="box">

        <h2>Informasi Pesanan</h2>

        <div class="info">
            <label>Meja</label>
            <span>: Meja {{ $order->nomor_meja }}</span>
        </div>

        <div class="info">
            <label>Pelanggan</label>
            <span>: {{ $order->nama_pelanggan }}</span>
        </div>

        <div class="info">
            <label>Waktu</label>
            <span>: {{ $order->created_at->format('d M Y H:i') }}</span>
        </div>

        <div class="info">
            <label>Total Item</label>
            <span>: {{ count(json_decode($order->detail_pesanan,true)) }} Menu</span>
        </div>

    </div>

    <div class="box">

        <h2>Update Status</h2>

        <div class="steps">

            <div class="circle active">1</div>

            <div class="line"></div>

            <div class="circle
            {{ $order->status == 'dalam proses' || $order->status == 'selesai' ? 'active' : '' }}">
                2
            </div>

            <div class="line"></div>

            <div class="circle
            {{ $order->status == 'selesai' ? 'active' : '' }}">
                3
            </div>

        </div>

        <div class="action">

            @if($order->status != 'selesai')

            <form
                action="/update-status-dapur/{{ $order->id }}"
                method="POST"
            >

                @csrf

                <button type="submit">

                    @if($order->status == 'pembayaran dikonfirmasi')

                        <i class="fa-solid fa-play"></i>
                        Mulai Proses

                    @elseif($order->status == 'dalam proses')

                        <i class="fa-solid fa-check"></i>
                        Selesai

                    @endif

                </button>

            </form>

            @endif

        </div>

    </div>

</div>

<div class="menu-box">

    <h2>Daftar Menu</h2>

    <table>

        <tr>
            <th>No</th>
            <th>Menu</th>
            <th>Jumlah</th>
        </tr>

        @foreach(json_decode($order->detail_pesanan,true) as $item)

        <tr>

            <td>{{ $loop->iteration }}</td>

            <td>{{ $item['nama'] }}</td>

            <td>{{ $item['jumlah'] }}</td>

        </tr>

        @endforeach

    </table>

</div>

<a href="/pesanan-masuk-dapur" class="back">
    ← Kembali
</a>

</body>
</html>