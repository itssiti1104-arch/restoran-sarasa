<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Informasi Pesanan</title>

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

<style>

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:'Poppins', sans-serif;
}

body{
    padding:40px;
}

.container{
    display:grid;
    grid-template-columns:1fr 1fr;
    gap:40px;
}

h1{
    font-size:55px;
    margin-bottom:40px;
}

label{
    font-size:30px;
    font-weight:600;
    display:block;
    margin-bottom:10px;
}

input,
textarea{
    width:100%;
    padding:18px;
    border:4px solid #aaa;
    border-radius:15px;
    margin-bottom:25px;
    font-size:22px;
}

textarea{
    height:150px;
    resize:none;
}

.summary{
    border:4px solid #aaa;
    border-radius:20px;
    padding:35px;
}

.summary h2{
    margin-bottom:30px;
}

.item{
    display:flex;
    justify-content:space-between;
    margin-bottom:30px;
    font-size:30px;
}

.total{
    border-top:4px solid #ccc;
    margin-top:50px;
    padding-top:25px;
    display:flex;
    justify-content:space-between;
    font-size:40px;
    font-weight:700;
    color:#5a0010;
}

.buttons{
    margin-top:70px;
    display:flex;
    gap:30px;
}

.btn{
    padding:20px 40px;
    border-radius:15px;
    text-decoration:none;
    font-size:25px;
    font-weight:600;
}

.back{
    border:4px solid #aaa;
    color:black;
}

.pay{
    background:#5a0010;
    color:white;
}

</style>
</head>
<body>

<h1>Informasi Pesanan</h1>

<div class="container">

    <div>

        <label>Nama</label>
        <input type="text" placeholder="Isi Nama Anda">

        <label>Meja</label>
        <input type="text" placeholder="Isi Nomor Meja">

        <label>Catatan</label>
        <textarea placeholder="Tambahkan catatan..."></textarea>

    </div>

    <div class="summary">

        <h2>Ringkasan Pesanan</h2>

        <div class="item">
            <span>Nasi Goreng x1</span>
            <span>Rp 20.000</span>
        </div>

        <div class="item">
            <span>Es Teh x1</span>
            <span>Rp 3.000</span>
        </div>

        <div class="total">
            <span>Total</span>
            <span>Rp 23.000</span>
        </div>

    </div>

</div>

<div class="buttons">

    <a href="/keranjang" class="btn back">Kembali</a>

    <a href="/kode-pesanan" class="btn pay">
        Pesan dan Bayar di Kasir
    </a>

</div>

</body>
</html>