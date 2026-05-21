<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Detail Pesanan</title>

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

<style>

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:'Poppins', sans-serif;
}

body{
    background:#f6f6f6;
    padding:35px;
}

.back{
    text-decoration:none;
    color:#5a0010;
    font-size:22px;
    font-weight:600;
}

.header{
    display:flex;
    justify-content:space-between;
    align-items:flex-start;
    margin-top:20px;
    margin-bottom:30px;
}

.header h1{
    font-size:55px;
}

.kode{
    text-align:right;
}

.kode p{
    color:#999;
    font-size:20px;
    font-weight:600;
}

.kode h2{
    color:#5a0010;
    font-size:55px;
}

.container{
    display:flex;
    gap:40px;
}

.card{
    background:white;
    border:2px solid #bbb;
    border-radius:18px;
    padding:30px;
}

.left{
    width:42%;
}

.right{
    width:58%;
}

.card h2{
    font-size:32px;
    margin-bottom:30px;
}

.info{
    display:flex;
    justify-content:space-between;
    margin-bottom:25px;
    font-size:22px;
}

.btn{
    margin-top:180px;
    width:100%;
    height:75px;
    border:none;
    border-radius:15px;
    background:#6d0f1d;
    color:white;
    font-size:28px;
    font-weight:600;
    cursor:pointer;
}

table{
    width:100%;
    border-collapse:collapse;
    font-size:20px;
}

th{
    background:#d9d9d9;
    padding:15px;
}

td{
    padding:15px;
    text-align:center;
    border-bottom:2px solid #ccc;
}

.total{
    display:flex;
    justify-content:space-between;
    margin-top:250px;
    font-size:28px;
    font-weight:700;
}

.harga{
    color:#5a0010;
}

</style>
</head>
<body>

<a href="/kasir" class="back">‹ Kembali</a>

<div class="header">

    <h1>Detail Pesanan</h1>

    <div class="kode">
        <p>No Pesanan</p>
        <h2>#ORD-20240519-0012</h2>
    </div>

</div>

<div class="container">

    <!-- LEFT -->

    <div class="card left">

        <h2>Informasi Pesanan</h2>

        <div class="info">
            <span>Pelanggan</span>
            <span>Dina Rahma Firzana</span>
        </div>

        <div class="info">
            <span>Meja</span>
            <span>Meja 5</span>
        </div>

        <div class="info">
            <span>Waktu Pesan</span>
            <span>19 Mei 2024, 12.25</span>
        </div>

        <div class="info">
            <span>Jumlah Pesan</span>
            <span>2 Item</span>
        </div>

        <button class="btn">
            Proses Pembayaran
        </button>

    </div>

    <!-- RIGHT -->

    <div class="card right">

        <h2>Daftar Pesanan</h2>

        <table>

            <tr>
                <th>No</th>
                <th>Menu</th>
                <th>Jumlah</th>
                <th>Harga</th>
                <th>Subtotal</th>
            </tr>

            <tr>
                <td>1</td>
                <td>Nasi Goreng</td>
                <td>1</td>
                <td>Rp 20.000</td>
                <td>Rp 20.000</td>
            </tr>

            <tr>
                <td>2</td>
                <td>Es Teh</td>
                <td>1</td>
                <td>Rp 3.000</td>
                <td>Rp 3.000</td>
            </tr>

        </table>

        <div class="total">
            <span>Total</span>
            <span class="harga">Rp 23.000</span>
        </div>

    </div>

</div>

</body>
</html>