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

<title>Pembayaran Berhasil</title>

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
    min-height:100vh;
    display:flex;
    justify-content:center;
    align-items:center;
}

.container{
    width:900px;
    text-align:center;
}

.check{
    width:120px;
    height:120px;
    background:#00b300;
    border-radius:50%;
    margin:auto;
    display:flex;
    justify-content:center;
    align-items:center;
    font-size:70px;
    color:white;
    font-weight:bold;
}

h1{
    margin-top:25px;
    font-size:56px;
}

.subtitle{
    color:#555;
    font-size:26px;
    margin-bottom:40px;
}

.card{
    background:white;
    border:2px solid #999;
    border-radius:20px;
    padding:40px;
    display:flex;
    gap:40px;
    align-items:flex-start;
    text-align:left;
}

.icon{
    font-size:90px;
    color:#5a0010;
}

.detail{
    flex:1;
}

.row{
    display:flex;
    justify-content:space-between;
    margin-bottom:30px;
    font-size:34px;
    font-weight:600;
}

.actions{
    margin-top:40px;
    display:flex;
    justify-content:center;
    gap:25px;
}

.btn{
    padding:18px 40px;
    border-radius:15px;
    font-size:22px;
    font-weight:700;
    text-decoration:none;
}

.print{
    border:3px solid #5a0010;
    color:#5a0010;
    background:white;
}

.back{
    background:#5a0010;
    color:white;
}

</style>
</head>
<body>

<div class="container">

    <div class="check">
        ✓
    </div>

    <h1>Pembayaran Berhasil</h1>

    <p class="subtitle">
        Transaksi telah berhasil dikonfirmasi.
    </p>

    <div class="card">

        <div class="icon">
            📋
        </div>

        <div class="detail">

            <div class="row">
                <span>No Pesanan</span>
                <span>#{{ $order->kode_order }}</span>
            </div>

            <div class="row">
                <span>Meja</span>
                <span>Meja {{ $order->nomor_meja }}</span>
            </div>

            <div class="row">
                <span>Total Bayar</span>
                <span>
                    Rp {{ number_format($order->total_harga,0,',','.') }}
                </span>
            </div>

            <div class="row">
                <span>Metode</span>
                <span>Tunai</span>
            </div>

        </div>

    </div>

    <div class="actions">

        <a href="/kasir" class="btn back">
            Kembali ke Antrean
        </a>

    </div>

</div>

</body>
</html>