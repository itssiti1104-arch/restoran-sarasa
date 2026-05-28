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
    <title>Riwayat Pesanan</title>

    <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"/>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <style>

        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
        }

        body{
            font-family:'Poppins', sans-serif;
            display:flex;
            background:#fff;
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
            padding:40px;
        }

        .title{
            font-size:55px;
            margin-bottom:40px;
        }

        table{
            width:100%;
            border-collapse:collapse;
            border:4px solid #b5b5b5;
            border-radius:20px;
            overflow:hidden;
        }

        th{
            font-size:25px;
            text-align:left;
            padding:30px;
            border-bottom:3px solid #b5b5b5;
        }

        td{
            padding:35px 30px;
            font-size:22px;
            border-bottom:3px solid #b5b5b5;
        }

        .diproses{
            color:#f0b84b;
            font-weight:600;
        }

        .selesai{
            color:green;
            font-weight:600;
        }

        .batal{
            color:red;
            font-weight:600;
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

            <a href="/riwayat-pesanan" class="active">
                <i class="fa-solid fa-clipboard-list"></i>
                Riwayat Pesanan
            </a>

            <a href="/status-pesanan">
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

        <h1 class="title">Riwayat Pesanan</h1>

        <table>

            <tr>
                <th>No. Pesanan</th>
                <th>Tanggal</th>
                <th>Meja</th>
                <th>Total</th>
                <th>Status</th>
            </tr>

            <tr>
                <td>#ORD-20240519-0012</td>
                <td>19 Mei 2024, 12.30</td>
                <td>Meja 5</td>
                <td>Rp 25.000</td>
                <td class="diproses">Diproses</td>
            </tr>

            <tr>
                <td>#ORD-20240519-0021</td>
                <td>18 Mei 2024, 18.45</td>
                <td>Meja 3</td>
                <td>Rp 44.000</td>
                <td class="selesai">Selesai</td>
            </tr>

            <tr>
                <td>#ORD-20240519-0008</td>
                <td>17 Mei 2024, 13.10</td>
                <td>Meja 2</td>
                <td>Rp 30.000</td>
                <td class="selesai">Selesai</td>
            </tr>

            <tr>
                <td>#ORD-20240519-0011</td>
                <td>15 Mei 2024, 19.20</td>
                <td>Meja 1</td>
                <td>Rp 28.000</td>
                <td class="batal">Dibatalkan</td>
            </tr>

        </table>

    </div>

</body>
</html>