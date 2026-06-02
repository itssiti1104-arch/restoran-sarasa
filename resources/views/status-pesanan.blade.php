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

<title>Status Pesanan</title>

<link rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"/>

<link rel="preconnect" href="https://fonts.googleapis.com">
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
    background:white;
}

/* SIDEBAR */

.sidebar{
    width:320px;
    min-height:100vh;
    background:#5a0010;
    padding:25px;
    color:white;
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

.menu-sidebar{
    display:flex;
    flex-direction:column;
    gap:20px;
}

.menu-sidebar a{
    color:white;
    text-decoration:none;
    display:flex;
    align-items:center;
    gap:20px;
    font-size:20px;
    padding:15px 20px;
    border-radius:15px;
    transition:0.3s;
}

.menu-sidebar a:hover,
.menu-sidebar .active{
    background:white;
    color:#5a0010;
}

.menu-sidebar i{
    font-size:35px;
}

/* MAIN */

.main{
    flex:1;
    padding:50px;
}

.title{
    font-size:55px;
    margin-bottom:50px;
}

.timeline{
    position:relative;
    margin-left:40px;
}

.step{
    display:flex;
    align-items:flex-start;
    gap:30px;
    margin-bottom:50px;
    position:relative;
}

.circle{
    width:70px;
    height:70px;
    border-radius:50%;
    border:6px solid #008a3b;
    display:flex;
    align-items:center;
    justify-content:center;
    color:#008a3b;
    font-size:35px;
    background:white;
    z-index:2;
}

.active-status{
    background:#00a63e;
    color:white;
}

.line{
    position:absolute;
    left:34px;
    top:70px;
    width:5px;
    height:70px;
    background:black;
}

.content{
    flex:1;
}

.content h2{
    font-size:32px;
}

.content p{
    font-size:22px;
    color:#333;
}

.time{
    font-size:22px;
}

.order-card{
    background:#fff;
    border:1px solid #ddd;
    border-radius:20px;
    padding:30px;
    margin-bottom:30px;
    box-shadow:0 4px 12px rgba(0,0,0,0.08);
}

</style>
</head>
<body>

<!-- SIDEBAR -->

<div class="sidebar">

    <div class="logo">

        <img src="/images/logo_putih.png">

        <div class="logo-text">
            <h1>sarasa</h1>
            <p>RESTORAN</p>
        </div>

    </div>

    <div class="menu-sidebar">

        <a href="/pelanggan">
            <i class="fa-solid fa-house"></i>
            Beranda
        </a>

        <a href="/menu-pelanggan">
            <i class="fa-solid fa-book"></i>
            Menu
        </a>

        <a href="/riwayat-pesanan">
            <i class="fa-solid fa-clipboard-list"></i>
            Riwayat Pesanan
        </a>

        <a href="/status-pesanan" class="active">
            <i class="fa-solid fa-bell-concierge"></i>
            Status Pesanan
        </a>

       <a href="/profil-pelanggan">
            <i class="fa-regular fa-user"></i>
            Profil Saya
        </a>

        <a href="/logout">
            <i class="fa-solid fa-right-from-bracket"></i>
            Logout
        </a>

    </div>

</div>

<!-- MAIN -->

<div class="main">

    <h1 class="title">Status Pesanan</h1>

    @if($orders->isEmpty())

        <h2>Belum ada pesanan</h2>

    @else

    @foreach($orders as $order)
    <div class="order-card">
        <h2>Order {{ $order->kode_order }}</h2>

        <div class="timeline">

            <!-- STEP 1 -->

            <div class="step">

                <div>
                    <div class="circle active-status">✓</div>
                    <div class="line"></div>
                </div>

                <div class="content">
                    <h2>Pesanan Diterima</h2>
                    <p>Pesanan berhasil dibuat.</p>
                </div>

                <div class="time">
                    {{ $order->created_at->format('H:i') }}
                </div>

            </div>

            <!-- STEP 2 -->

            <div class="step">

                <div>
                    <div class="circle active-status">✓</div>
                    <div class="line"></div>
                </div>

                <div class="content">
                    <h2>Menunggu Pembayaran</h2>
                    <p>Silakan lakukan pembayaran di kasir.</p>
                </div>

                <div class="time">
                    {{ $order->created_at->format('H:i') }}
                </div>

            </div>

            <!-- STEP 3 -->

            <div class="step">

                <div>

                    <div class="circle
                    {{ in_array($order->status, [
                        'pembayaran dikonfirmasi',
                        'dalam proses',
                        'selesai'
                    ]) ? 'active-status' : '' }}">
                        ✓
                    </div>

                    <div class="line"></div>

                </div>

                <div class="content">
                    <h2>Pembayaran Dikonfirmasi</h2>
                    <p>Pembayaran telah berhasil.</p>
                </div>

                <div class="time">
                    {{ $order->pembayaran_dikonfirmasi_at
                        ? $order->pembayaran_dikonfirmasi_at->format('H:i')
                        : '--:--'
                    }}
                </div>

            </div>

            <!-- STEP 4 -->

            <div class="step">

                <div>

                    <div class="circle
                    {{ in_array($order->status, [
                        'dalam proses',
                        'selesai'
                    ]) ? 'active-status' : '' }}">
                        ✓
                    </div>

                    <div class="line"></div>

                </div>

                <div class="content">
                    <h2>Pesanan Diproses</h2>
                    <p>Pesanan sedang dibuat oleh dapur.</p>
                </div>

                <div class="time">
                    {{ $order->mulai_proses_at
                        ? $order->mulai_proses_at->format('H:i')
                        : '--:--'
                    }}
                </div>

            </div>

            <!-- STEP 5 -->

            <div class="step">

                <div class="circle
                {{ $order->status == 'selesai'
                    ? 'active-status'
                    : '' }}">
                    ✓
                </div>

                <div class="content">
                    <h2>Selesai</h2>
                    <p>Pesanan telah selesai dibuat dan sedang menuju meja Anda.</p>
                </div>

                <div class="time">
                    {{ $order->selesai_at
                        ? $order->selesai_at->format('H:i')
                        : '--:--'
                    }}
                </div>

            </div>

        </div>
    </div>
    @endforeach

    @endif

</div>

</body>
</html>