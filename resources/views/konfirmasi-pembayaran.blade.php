<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport"
content="width=device-width, initial-scale=1.0">

<title>Konfirmasi Pembayaran</title>

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
    padding:40px;
}

.back{
    text-decoration:none;
    font-size:22px;
    font-weight:700;
    color:#5a0010;
}

.container{
    display:flex;
    gap:40px;
    margin-top:30px;
}

.card{
    flex:1;
    background:white;
    border:2px solid #ccc;
    border-radius:20px;
    padding:30px;
}

.card h2{
    margin-bottom:35px;
    font-size:40px;
}

.item{
    margin-bottom:35px;
}

.row{
    display:flex;
    justify-content:space-between;
    align-items:center;
}

.label{
    font-size:24px;
    font-weight:600;
}

.value{
    font-size:28px;
    font-weight:700;
    color:#5a0010;
}

.input-box{
    display:flex;
    align-items:center;
    border:3px solid #bbb;
    border-radius:15px;
    overflow:hidden;
    width:360px;
    height:70px;
    margin-top:10px;
}

.rp{
    width:90px;
    height:100%;
    display:flex;
    align-items:center;
    justify-content:center;
    font-size:24px;
    font-weight:700;
    color:#5a0010;
    background:white;
}

.input{
    flex:1;
    height:100%;
    border:none;
    outline:none;
    padding:0 20px;
    font-size:28px;
    font-weight:700;
    text-align:right;
    color:#5a0010;
}

.kembalian{
    margin-top:40px;
}

.valid-box{
    margin-top:50px;
    background:#e4f5ea;
    border-radius:15px;
    padding:20px;
}

.valid-box h3{
    color:#00a651;
    font-size:22px;
    margin-bottom:5px;
}

.valid-box p{
    font-size:18px;
    color:#333;
}

.actions{
    margin-top:40px;
    display:flex;
    gap:20px;
    justify-content:flex-end;
}

.btn{
    padding:18px 35px;
    border-radius:15px;
    font-size:22px;
    font-weight:700;
    cursor:pointer;
}

.cancel{
    border:3px solid #5a0010;
    background:white;
    color:#5a0010;
}

.confirm{
    border:none;
    background:#5a0010;
    color:white;
}

</style>
</head>
<body>

<div class="container">

    <!-- LEFT -->

    <div class="card">

        <h2>Informasi Pembayaran</h2>

        <div class="item">

            <div class="label">
                No Pesanan
            </div>

            <div class="value">
                #{{ $order->kode_order }}
            </div>

        </div>

        <div class="item">

            <div class="label">
                Meja
            </div>

            <div class="value">
                Meja {{ $order->nomor_meja }}
            </div>

        </div>

        <div class="item">

            <div class="label">
                Total Tagihan
            </div>

            <div class="value">
                Rp {{ number_format($order->total_harga,0,',','.') }}
            </div>

        </div>

    </div>

    <!-- RIGHT -->

    <div class="card">

        <h2>Pembayaran Tunai</h2>

        <div class="item row">

            <div class="label">
                Total Tagihan
            </div>

            <div class="value">
                Rp {{ number_format($order->total_harga,0,',','.') }}
            </div>

        </div>

        <form
            action="/proses-pembayaran/{{ $order->id }}"
            method="POST"
        >

            @csrf

            <div class="item row">

                <div class="label">
                    Uang Diterima
                </div>

                <div class="input-box">

                    <div class="rp">
                        Rp
                    </div>

                    <input
                        type="number"
                        name="uang_diterima"
                        id="uangDiterima"
                        class="input"
                        placeholder="0"
                        required
                    >

                </div>

            </div>

            <div class="item row kembalian">

                <div class="label">
                    Kembalian
                </div>

                <div
                    class="value"
                    id="kembalian"
                >
                    Rp 0
                </div>

            </div>

            <div class="actions">

                <a href="/detail-pesanan-kasir/{{ $order->id }}">

                    <button
                        type="button"
                        class="btn cancel"
                    >
                        Batalkan
                    </button>

                </a>

                <button
                    type="submit"
                    class="btn confirm"
                >
                    Konfirmasi Pembayaran
                </button>

            </div>

        </form>

    </div>

</div>

<script>

const uangInput =
document.getElementById('uangDiterima');

const kembalian =
document.getElementById('kembalian');

const total =
{{ $order->total_harga }};

uangInput.addEventListener('input', function(){

    let uang = parseInt(this.value) || 0;

    let hasil = uang - total;

    if(hasil < 0){

        hasil = 0;

    }

    kembalian.innerHTML =
    'Rp ' + hasil.toLocaleString('id-ID');

});

</script>

</body>
</html>