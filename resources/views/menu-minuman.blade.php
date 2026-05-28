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
    <title>Menu Pelanggan</title>

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
            background:white;
            display:flex;
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

        .main{
            flex:1;
            padding:20px;
        }

        .container{
            width:90%;
            margin:auto;
            padding:30px 0;
        }

        /* TOP MENU */

        .menu-top{
            display:flex;
            justify-content:space-between;
            align-items:center;
            margin-bottom:30px;
        }

        .tabs{
            display:flex;
            gap:120px;
            font-size:22px;
            font-weight:700;
        }

        .tabs a{
            text-decoration:none;
            color:black;
            position:relative;
            padding-bottom:15px;
        }

        .tabs .active{
            color:#5a0010;
        }

        .tabs .active::after{
            content:'';
            position:absolute;
            left:0;
            bottom:0;
            width:100%;
            height:4px;
            background:#5a0010;
            border-radius:10px;
        }

        .cart{
            position:relative;
            font-size:38px;
            color:#5a0010;
            text-decoration:none;
        }

        .badge{
            position:absolute;
            top:-5px;
            right:-10px;
            width:20px;
            height:20px;
            border-radius:50%;
            background:#5a0010;
            color:white;
            display:flex;
            align-items:center;
            justify-content:center;
            font-size:11px;
        }

        .line{
            width:100%;
            height:3px;
            background:#ccc;
            margin-top:-20px;
            margin-bottom:25px;
        }

        /* GRID */

        .menu-grid{
            display:grid;
            grid-template-columns:repeat(3,1fr);
            gap:30px;
        }

        .card{
            border:4px solid #b5b5b5;
            border-radius:15px;
            overflow:hidden;
            background:white;
        }

        .card img{
            width:100%;
            height:250px;
            object-fit:cover;
        }

        .card-body{
            padding:18px;
            display:flex;
            justify-content:space-between;
            align-items:end;
        }

        .card-body h3{
            font-size:28px;
            color:#5a0010;
            margin-bottom:5px;
        }

        .price{
            font-size:24px;
            color:#5a0010;
        }

        /* QTY */

        .qty-box{
            display:flex;
            align-items:center;
            border:3px solid #b5b5b5;
            border-radius:15px;
            overflow:hidden;
        }

        .qty-btn{
            width:45px;
            height:55px;
            border:none;
            background:white;
            font-size:35px;
            color:#5a0010;
            cursor:pointer;
        }

        .qty-number{
            width:50px;
            height:55px;
            display:flex;
            align-items:center;
            justify-content:center;
            border-left:3px solid #b5b5b5;
            border-right:3px solid #b5b5b5;
            font-size:28px;
            font-weight:600;
            color:#5a0010;
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

            <a href="/menu-pelanggan" class="active">
                <i class="fa-solid fa-book"></i>
                Menu
            </a>

            <a href="/riwayat-pesanan">
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

        <div class="container">

        <!-- TOP -->

        <div class="menu-top">

            <div class="tabs">

                <a href="/menu-pelanggan">
                    Makanan
                </a>

                <a href="/menu-minuman" class="active">
                    Minuman
                </a>

                <a href="/menu-dessert">
                    Dessert
                </a>

            </div>

            <a href="/keranjang" class="cart">
                <i class="fa-solid fa-cart-shopping"></i>

                <div class="badge">

                    {{
                        collect(session('keranjang', []))
                        ->sum('jumlah')
                    }}

                </div>
            </a>

        </div>

        <div class="line"></div>

        <!-- MENU -->

        <div class="menu-grid">

            <!-- CARD -->

            @foreach($menus as $menu)

            <div class="card">

                <img src="/images/{{ $menu->gambar }}">

                <div class="card-body">

                    <div>
                        <h3>{{ $menu->nama_menu }}</h3>

                        <p class="price">
                            Rp {{ number_format($menu->harga,0,',','.') }}
                        </p>
                    </div>

                    <div class="qty-box">

                        <form action="/kurang-keranjang/{{ $menu->id }}" method="POST">
                            @csrf
                            <button class="qty-btn">-</button>
                        </form>

                        <div class="qty-number">
                            {{ session('keranjang')[$menu->id]['jumlah'] ?? 0 }}
                        </div>

                        <form action="/tambah-keranjang/{{ $menu->id }}" method="POST">
                            @csrf
                            <button class="qty-btn">+</button>
                        </form>

                    </div>

                </div>

            </div>

            @endforeach

        </div>

    </div>

    </div>

</body>
</html>