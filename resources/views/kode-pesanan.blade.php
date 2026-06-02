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

<title>Kode Pesanan</title>

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

<style>

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:'Poppins', sans-serif;
}

body{
    padding:50px;
}

.card{
    border:4px solid #aaa;
    border-radius:20px;
    padding:50px;
    text-align:center;
}

.card h2{
    font-size:45px;
    margin-bottom:20px;
}

.code{
    font-size:70px;
    color:#5a0010;
    font-weight:700;
    margin-bottom:50px;
}

.total{
    border-top:4px solid #ccc;
    padding-top:40px;
}

.total h3{
    font-size:40px;
}

.price{
    font-size:70px;
    color:#5a0010;
    font-weight:700;
    margin-top:15px;
}

.text{
    margin-top:40px;
    font-size:30px;
    line-height:1.7;
}

.success{
    margin-top:40px;
    background:#ffe5ea;
    padding:25px;
    border-radius:15px;
    font-size:25px;
}

.back-btn{
    display:inline-block;
    margin-top:10px;
    padding:18px 40px;
    background:#5a0010;
    color:white;
    text-decoration:none;
    border-radius:15px;
    font-size:24px;
    font-weight:600;
}

</style>
</head>
<body>

<div class="card">

    <h2>Tunjukkan kode pesanan ini ke kasir</h2>

    <div class="code">
        #{{ $kode }}
    </div>

    <div class="total">

        <h3>Total Pembayaran</h3>

        <div class="price">
            Rp {{ number_format($total,0,',','.') }}
        </div>

    </div>

    <div class="text">
        Silakan lakukan pembayaran tunai di kasir.
        Setelah pembayaran dikonfirmasi pesanan akan kami proses.
    </div>

</div>

<div class="success">
    <b>Terimakasih!</b><br>
    Kami akan segera memproses pesanan Anda setelah pembayaran dikonfirmasi.
</div>

<div style="margin-top:40px; text-align:center;">

    <a href="/pelanggan" class="back-btn">
        Kembali ke Beranda
    </a>

</div>

</body>
</html>