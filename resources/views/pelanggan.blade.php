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
    <title>Pelanggan - Sarasa</title>

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
            overflow:hidden;
        }

                .logo{
            display:flex;
            align-items:center;
            gap:15px;
            margin-bottom:50px;
        }
                .logo img{
            width:75px;
            flex-shrink:0;
        }
        .logo-text h1{
            font-size:42px;
            line-height:1;
        }
        .logo-text p{
            letter-spacing:3px;
            font-size:12px;
        }

        .menu{
            display:flex;
            flex-direction:column;
            gap:20px;
        }

        .menu a{
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

        .menu a:hover,
        .menu .active{
            background:white;
            color:#5a0010;
        }

        .menu i{
            font-size:35px;
        }

        /* MAIN */

        .main{
            flex:1;
            padding:30px;
        }

        .topbar{
            display:flex;
            justify-content:space-between;
            align-items:center;
            margin-bottom:30px;
        }

        .welcome h1{
            color:#5a0010;
            font-size:45px;
        }

        .welcome p{
            color:#666;
            font-size:25px;
        }

        .search-cart{
            display:flex;
            align-items:center;
            gap:20px;
        }

        .search-box{
            border:2px solid #ddd;
            border-radius:15px;
            padding:10px 20px;
            display:flex;
            align-items:center;
            gap:10px;
        }

        .search-box input{
            border:none;
            outline:none;
            font-size:18px;
        }

        .cart{
            position:relative;
            color:#5a0010;
            font-size:45px;
        }

        .badge{
            position:absolute;
            top:-5px;
            right:-10px;
            width:22px;
            height:22px;
            background:#5a0010;
            color:white;
            border-radius:50%;
            display:flex;
            align-items:center;
            justify-content:center;
            font-size:12px;
        }

        /* HERO */

        .hero{
            background:#fff1f3;
            border-radius:20px;
            overflow:hidden;
            display:grid;
            grid-template-columns:1fr 1fr;
            margin-bottom:25px;
            min-height:260px;
        }

        .hero-text{
            padding:25px 35px;
        }

        .hero-text h2{
            font-size:32px;
            margin-bottom:15px;
            line-height:1.3;
        }

        .hero-text p{
            color:#555;
            font-size:16px;
        }

        .hero-text button{
            background:#5a0010;
            color:white;
            border:none;
            padding:15px 25px;
            border-radius:10px;
            cursor:pointer;
            font-weight:600;
        }

        .hero img{
            width:100%;
            height:100%;
            object-fit:cover;
        }

        /* KATEGORI */

        .title{
            font-size:35px;
            margin-bottom:25px;
        }

        .category-grid{
            display:grid;
            grid-template-columns:repeat(3,1fr);
            gap:20px;
            margin-bottom:50px;
        }

        .category-card{
            background:#fff1f3;
            border-radius:20px;
            padding:25px;
            position:relative;
            overflow:hidden;
        }

        .category-card h3{
            font-size:35px;
            margin-bottom:20px;
        }

        .category-card button{
            background:#5a0010;
            color:white;
            border:none;
            padding:12px 20px;
            border-radius:10px;
            cursor:pointer;
        }

        .category-card img{
            width:180px;
            position:absolute;
            right:-20px;
            bottom:-10px;
        }

        /* FAVORIT */

        .favorite-header{
            display:flex;
            justify-content:space-between;
            align-items:center;
            margin-bottom:20px;
        }

        .favorite-header a{
            color:#5a0010;
            text-decoration:none;
            font-weight:600;
            font-size:25px;
        }

        .favorite-grid{
            display:grid;
            grid-template-columns:repeat(4,1fr);
            gap:20px;
        }

        .favorite-grid img{
            width:100%;
            height:180px;
            object-fit:cover;
            border-radius:20px;
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

        <div class="menu">

            <a href="#" class="active">
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

        <div class="topbar">

            <div class="welcome">
                <h1>Hai, Dina!👋🏻</h1>
                <p>Selamat datang kembali di restoran sarasa</p>
            </div>

        </div>

        <!-- HERO -->

        <div class="hero">

            <div class="hero-text">

                <h2>
                    Nikmati hidangan terbaik,
                    disajikan langsung di meja Anda
                </h2>

                <p>
                    Pilih menu favoritmu dan buat harimu lebih spesial
                </p>

            </div>

            <img src="/images/resto.jpeg">

        </div>

        <!-- KATEGORI -->

        <h2 class="title">Kategori menu</h2>

        <div class="category-grid">

            <div class="category-card">
                <h3>Makanan</h3>
                <a href="/menu-pelanggan">
                    <button>Lihat menu</button>
                </a>
                <img src="/images/makanan.jpeg">
            </div>

            <div class="category-card">
                <h3>Minuman</h3>
                <a href="/menu-minuman">
                    <button>Lihat menu</button>
                </a>
                <img src="/images/minuman.jpeg">
            </div>

            <div class="category-card">
                <h3>Dessert</h3>
                <a href="/menu-dessert">
                    <button>Lihat menu</button>
                </a>
                <img src="/images/dessert.jpeg">
            </div>

        </div>

       

    </div>

</body>
</html>