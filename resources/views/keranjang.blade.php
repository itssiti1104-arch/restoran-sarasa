<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Keranjang</title>

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
            padding:40px;
            background:#fff;
        }

        h1{
            font-size:55px;
            margin-bottom:50px;
        }

        table{
            width:100%;
            border-collapse:collapse;
        }

        th{
            text-align:left;
            padding-bottom:20px;
            font-size:28px;
            border-bottom:4px solid #ccc;
        }

        td{
            padding:35px 0;
            border-bottom:4px solid #ddd;
            font-size:24px;
        }

        .menu-info{
            display:flex;
            align-items:center;
            gap:20px;
        }

        .menu-info img{
            width:120px;
            border-radius:15px;
        }

        .qty-box{
            display:flex;
            align-items:center;
            border:3px solid #aaa;
            border-radius:15px;
            overflow:hidden;
            width:max-content;
        }

        .qty-btn{
            width:50px;
            height:60px;
            border:none;
            background:white;
            font-size:35px;
            cursor:pointer;
        }

        .qty-number{
            width:60px;
            text-align:center;
            font-size:30px;
            border-left:3px solid #aaa;
            border-right:3px solid #aaa;
        }

        .delete{
            color:#d46a7a;
            font-size:35px;
            cursor:pointer;
        }

        .button-area{
            margin-top:60px;
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

        .btn-back{
            border:4px solid #aaa;
            color:black;
        }

        .btn-confirm{
            background:#5a0010;
            color:white;
        }

    </style>
</head>
<body>

    <h1>Keranjang Pesanan</h1>

    <table>

        <tr>
            <th>Menu</th>
            <th>Harga</th>
            <th>Jumlah</th>
            <th>Subtotal</th>
            <th>Aksi</th>
        </tr>

        <tr>

            <td>
                <div class="menu-info">
                    <img src="/images/nasi_goreng.jpeg">
                    <h3>Nasi Goreng</h3>
                </div>
            </td>

            <td>Rp 20.000</td>

            <td>

                <div class="qty-box">
                    <button class="qty-btn">-</button>
                    <div class="qty-number">1</div>
                    <button class="qty-btn">+</button>
                </div>

            </td>

            <td>Rp 20.000</td>

            <td>
                <i class="fa-regular fa-trash-can delete-btn"></i>
            </td>

        </tr>

    </table>

    <div class="button-area">

        <a href="/menu-pelanggan" class="btn btn-back">
            <i class="fa-solid fa-chevron-left"></i>
            Lanjut Belanja
        </a>

        <a href="/informasi-pesanan" class="btn btn-confirm">
            Konfirmasi Pesanan
        </a>

    </div>

<script>

    const plusButtons = document.querySelectorAll('.plus');
    const minusButtons = document.querySelectorAll('.minus');

    plusButtons.forEach(button => {

        button.addEventListener('click', function(){

            let number =
            this.parentElement.querySelector('.qty-number');

            let count = parseInt(number.innerText);

            count++;

            number.innerText = count;

        });

    });

    minusButtons.forEach(button => {

        button.addEventListener('click', function(){

            let number =
            this.parentElement.querySelector('.qty-number');

            let count = parseInt(number.innerText);

            if(count > 0){

                count--;

                number.innerText = count;

            }

        });

    });

</script>

<script>

    const deleteButtons =
    document.querySelectorAll('.delete-btn');

    deleteButtons.forEach(button => {

        button.addEventListener('click', function(){

            this.closest('tr').remove();

        });

    });

</script>

</body>
</html>