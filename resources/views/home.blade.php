<!DOCTYPE html>
<html lang="id">
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sarasa Restaurant</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600;700&family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">

    <style>

    html{
    scroll-behavior:smooth;
    }

        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
        }

        body{
            font-family:'Poppins', sans-serif;
            background:#ffffff;
            color:#222;
        }

        a{
            text-decoration:none;
        }

        .container{
            width:90%;
            max-width:1200px;
            margin:auto;
        }

        .logo-area{
            display:flex;
            align-items:center;
            gap:10px;
        }

        .logo-img{
            width:55px;
            height:55px;
            object-fit:contain;
        }

        .logo{
            font-size:38px;
            color:#5a0010;
            font-family:'Playfair Display', serif;
            line-height:1;
        }

        .logo-text{
            font-size:12px;
            letter-spacing:3px;
            color:#5a0010;
        }

        /* NAVBAR */

        nav{
            background:white;
            padding:20px 0;
            box-shadow:0 2px 10px rgba(0,0,0,0.05);
            position:sticky;
            top:0;
            z-index:100;
        }

        .navbar{
            display:flex;
            justify-content:space-between;
            align-items:center;
        }

        .logo{
            font-size:35px;
            font-weight:700;
            color:#5a0010;
            font-family:'Playfair Display', serif;
        }

        .menu{
            display:flex;
            gap:30px;
            align-items:center;
        }

        .menu a{
            color:#333;
            font-size:14px;
            font-weight:600;
            transition:0.3s;
        }

        .menu a:hover{
            color:#5a0010;
        }

        .nav-btn{
            display:flex;
            gap:10px;
        }

        .btn{
            padding:10px 20px;
            border-radius:8px;
            border:none;
            cursor:pointer;
            font-weight:600;
        }

        .btn-login{
            border:2px solid #5a0010;
            background:white;
            color:#5a0010;
        }

        .btn-login:hover{
            background:#5a0010;
            color:white;
            transition:0.3s;
        }

        .btn-register{
            border:2px solid #5a0010;
            background:white;
            color:#5a0010;
        }

        .btn-register:hover{
            background:#5a0010;
            color:white;
            transition:0.3s;
        }

        /* HERO */

        .hero{
            background:#5a0010;
            color:white;
            padding:50px 0;
        }

        .hero-content{
            display:flex;
            justify-content:space-between;
            align-items:center;
            gap:40px;
        }

        .hero-text h3{
            font-size:40px;
            font-family:'Playfair Display', serif;
            font-weight:400;
        }

        .hero-text h1{
            font-size:70px;
            line-height:1.1;
            font-family:'Playfair Display', serif;
        }

        .hero-text p{
            margin:20px 0;
            max-width:500px;
            line-height:1.7;
        }

        .hero-btn{
            display:flex;
            gap:15px;
            margin-top:25px;
        }

        .hero-btn button{
            padding:14px 25px;
            border-radius:10px;
            border:none;
            font-weight:600;
            cursor:pointer;
        }

        .btn-order:hover{
            background:white;
            color:#5a0010;
            transition:0.3s;
        }

        .btn-order{
            background:transparent;
            border:2px solid white !important;
            color:white;
        }

        .btn-menu:hover{
            background:white;
            color:#5a0010;
            transition:0.3s;
        }

        .btn-menu{
            background:transparent;
            border:2px solid white !important;
            color:white;
        }

        .hero-image img{
            width:500px;
        }

        /* FEATURES */

        .features{
            margin-top:-40px;
        }

        .feature-box{
            background:white;
            border-radius:20px;
            padding:30px;
            display:grid;
            grid-template-columns:repeat(3,1fr);
            gap:30px;
            box-shadow:0 5px 20px rgba(0,0,0,0.1);
        }

        .feature-item h4{
            margin-bottom:8px;
            color:#5a0010;
        }

        .feature-item{
            display:flex;
            align-items:center;
            gap:15px;
        }

        .feature-icon{
            width:60px;
            height:60px;
            background:#5a0010;
            color:white;
            border-radius:50%;
            display:flex;
            align-items:center;
            justify-content:center;
            font-size:24px;
            flex-shrink:0;
        }

        /* SECTION */

        section{
            padding:35px 0;
            scroll-margin-top:100px;
        }

        .section-title{
            text-align:center;
            margin-bottom:50px;
        }

        .section-title h2{
            font-size:50px;
            color:#5a0010;
            font-family:'Playfair Display', serif;
        }

        .title-line{
            display:flex;
            align-items:center;
            justify-content:center;
            gap:15px;
            margin-top:15px;
        }

        .title-line span{
            width:90px;
            height:3px;
            background:#5a0010;
            display:block;
        }

        .title-line i{
            color:#5a0010;
            font-size:25px;
        }

        /* MENU */

        .menu-grid{
            display:grid;
            grid-template-columns:repeat(4,1fr);
            gap:25px;
        }

        .card{
            background:white;
            border-radius:20px;
            overflow:hidden;
            box-shadow:0 5px 15px rgba(0,0,0,0.08);
            transition:0.3s;
        }

        .card:hover{
            transform:translateY(-5px);
        }

        .card img{
            width:100%;
            height:200px;
            object-fit:cover;
        }

        .card-body{
            padding:20px;
        }

        .card-body h3{
            margin-bottom:10px;
        }

        .price{
            color:#5a0010;
            font-weight:700;
        }

        .order-btn{
            margin-top:15px;
            background:#5a0010;
            color:white;
            border:none;
            padding:10px 15px;
            border-radius:8px;
            cursor:pointer;
        }

        .all-menu-btn{
            text-align:center;
            margin-top:40px;
        }

        .all-menu-btn button{
            background:#5a0010;
            color:white;
            border:none;
            padding:15px 30px;
            border-radius:10px;
            font-weight:600;
            cursor:pointer;
        }

        .all-menu-btn button:hover{
            background:#3d000b;
            transition:0.3s;
        }

        /* WHY US */

        .why-grid{
            display:grid;
            grid-template-columns:repeat(3,1fr);
            gap:30px;
            text-align:center;
        }

        .why-item{
            padding:20px;
        }

        .why-item h3{
            margin:20px 0 10px;
            color:#5a0010;
        }

        .why-icon{
            width:80px;
            height:80px;
            background:#5a0010;
            color:white;
            border-radius:50%;
            display:flex;
            align-items:center;
            justify-content:center;
            margin:auto;
            font-size:32px;
            margin-bottom:20px;
        }

        /* STEPS */

        .steps{
            background:#fff5f7;
        }

        .step-grid{
            display:grid;
            grid-template-columns:repeat(5,1fr);
            gap:20px;
            text-align:center;
        }

        .step-number{
            width:60px;
            height:60px;
            background:#5a0010;
            color:white;
            border-radius:50%;
            display:flex;
            align-items:center;
            justify-content:center;
            margin:auto;
            font-size:24px;
            font-weight:bold;
            margin-bottom:20px;
        }

        footer{
            background:#5a0010;
            color:white;
            padding:50px 0 20px;
        }

        .footer-grid{
            display:grid;
            grid-template-columns:repeat(4,1fr);
            gap:30px;
        }

        footer h3{
            margin-bottom:15px;
        }

        .footer-logo{
            display:flex;
            align-items:center;
            gap:10px;
            margin-bottom:15px;
        }

        .footer-logo img{
            width:45px;
        }

        .footer-logo h2{
            font-family:'Playfair Display', serif;
            font-size:28px;
        }

        .footer-logo p{
            font-size:10px;
            letter-spacing:3px;
        }

        .copyright{
            text-align:center;
            margin-top:40px;
            border-top:1px solid rgba(255,255,255,0.2);
            padding-top:20px;
        }

        @media(max-width:992px){
            .hero-content,
            .menu-grid,
            .why-grid,
            .step-grid,
            .footer-grid,
            .feature-box{
                grid-template-columns:1fr;
                display:grid;
            }

            .hero-content{
                text-align:center;
            }

            .hero-image img{
                width:100%;
            }

            .navbar{
                flex-direction:column;
                gap:20px;
            }

            .menu{
                flex-wrap:wrap;
                justify-content:center;
            }

            .social-icons{
                display:flex;
                gap:15px;
                margin-top:15px;
            }

            .social-icons i{
                width:45px;
                height:45px;
                border:2px solid #5a0010;
                border-radius:50%;
                display:flex;
                align-items:center;
                justify-content:center;
                color:#5a0010;
                cursor:pointer;
                transition:0.3s;
            }

            .social-icons i:hover{
                background:#5a0010;
                color:white;
            }

            .social-icons a{
                text-decoration:none;
            }


        }
    </style>
</head>
<body>

    <!-- NAVBAR -->

    <nav>
        <div class="container navbar">

            <div class="logo-area">

                <img src="/images/logo.png" alt="logo" class="logo-img">

                <div>
                    <h1 class="logo">sarasa</h1>
                    <p class="logo-text">RESTORAN</p>
                </div>

            </div>

            <div class="menu">
                <a href="#home">HOME</a>
                <a href="#menu">MENU</a>
                <a href="#tentang">TENTANG KAMI</a>
                <a href="#cara-pesan">CARA PESAN</a>
                <a href="#kontak">KONTAK</a>
            </div>

            <div class="nav-btn">
                <a href="/login">
                    <button class="btn btn-login">LOGIN</button>
                </a>
                <a href="/register">
                    <button class="btn btn-register">REGISTER</button>
                </a>
            </div>

        </div>
    </nav>

    <!-- HERO -->

    <section class="hero" id="home">
        <div class="container hero-content">

            <div class="hero-text">
                <h3>Selamat Datang di</h3>
                <h1>Restoran<br>Sarasa</h1>

                <p>
                    Nikmati berbagai hidangan lezat yang kami sajikan
                    dengan bahan berkualitas terbaik.
                </p>

                <div class="hero-btn">
                    <a href="/login">
                        <button class="btn-order">
                            <i class="fa-solid fa-utensils"></i> Pesan Sekarang
                        </button>
                    </a>
                    <a href="#menu">
                        <button class="btn-menu">
                            <i class="fa-solid fa-book-open"></i> Lihat Menu
                        </button>
                    </a>
                </div>
            </div>

            <div class="hero-image">
                <img src="/images/ayam_home.png" alt="ayam">
            </div>

        </div>
    </section>

    <!-- FEATURES -->

    <div class="container features">
        <div class="feature-box">

            <div class="feature-item">

                <div class="feature-icon">
                    <i class="fa-solid fa-utensils"></i>
                </div>

                <div>
                    <h4>Menu Berkualitas</h4>
                    <p>Bahan segar dan pilihan terbaik setiap hari.</p>
                </div>

            </div>

            <div class="feature-item">

                <div class="feature-icon">
                    <i class="fa-solid fa-bell-concierge"></i>
                </div>

                <div>
                    <h4>Disajikan di Meja</h4>
                    <p>Pesanan Anda diantar langsung ke meja.</p>
                </div>

            </div>

            <div class="feature-item">

                <div class="feature-icon">
                    <i class="fa-solid fa-handshake-angle"></i>
                </div>

                <div>
                    <h4>Pelayanan Ramah</h4>
                    <p>Tim kami siap melayani dengan sepenuh hati.</p>
                </div>

            </div>

        </div>
    </div>

    <!-- MENU -->

    <section id="menu">
        <div class="container">

            <div class="section-title">
                <h2>Menu Favorit Kami</h2>
                <div class="title-line">
                    <span></span>
                    <i class="fa-solid fa-star"></i>
                    <span></span>
                </div>
            </div>

            <div class="menu-grid">

                <div class="card">
                    <img src="/images/nasi_goreng.jpeg">

                    <div class="card-body">
                        <h3>Nasi Goreng</h3>
                        <p class="price">Rp. 20.000</p>
                    </div>
                </div>

                <div class="card">
                    <img src="/images/ayam_bakar.jpeg">

                    <div class="card-body">
                        <h3>Ayam Bakar</h3>
                        <p class="price">Rp. 27.000</p>
                    </div>
                </div>

                <div class="card">
                    <img src="/images/thai_tea.jpeg">

                    <div class="card-body">
                        <h3>Es Thai Tea</h3>
                        <p class="price">Rp. 12.000</p>
                    </div>
                </div>

                <div class="card">
                    <img src="/images/coklat_lava.jpeg">

                    <div class="card-body">
                        <h3>Coklat Lava</h3>
                        <p class="price">Rp. 18.000</p>
                    </div>
                </div>

            </div>

        </div>
        <div class="all-menu-btn">
            <a href="/login">
                <button>Lihat Semua Menu →</button>
            </a>
        </div>
    </section>

    <!-- WHY US -->

    <section>
        <div class="container">

            <div class="section-title">
                <section id="tentang">
                    <div class="container">

                        <div class="section-title">
                            <h2>Kenapa Memilih Kami?</h2>
                            <div class="title-line">
                                <span></span>
                                <i class="fa-solid fa-star"></i>
                                <span></span>
                            </div>
                        </div>
            </div>

            <div class="why-grid">

                <div class="why-item">

                    <div class="why-icon">
                        <i class="fa-solid fa-book-open"></i>
                    </div>

                    <h3>Menu Pilihan</h3>

                    <p>
                        Tersedia berbagai pilihan hidangan lezat
                        untuk memanjakan lidah Anda.
                    </p>

                </div>

                <div class="why-item">

                    <div class="why-icon">
                        <i class="fa-solid fa-mobile-screen-button"></i>
                    </div>

                    <h3>Pesan dari Meja</h3>

                    <p>
                        Pesan makanan favorit langsung dari meja
                        tanpa harus antre.
                    </p>

                </div>

                <div class="why-item">

                    <div class="why-icon">
                        <i class="fa-solid fa-wallet"></i>
                    </div>

                    <h3>Bayar di Kasir</h3>

                    <p>
                        Konfirmasi pesanan dan lakukan pembayaran
                        dengan cepat.
                    </p>

                </div>

            </div>

        </div>
    </section>

    <!-- STEPS -->

    <section class="steps">
        <div class="container">

            <div class="section-title">
                <section class="steps" id="cara-pesan">
                    <div class="container">

                        <div class="section-title">
                            <h2>Cara Pemesanan</h2>
                            <div class="title-line">
                                <span></span>
                                <i class="fa-solid fa-star"></i>
                                <span></span>
                            </div>
                        </div>
            </div>

            <div class="step-grid">

                <div>
                    <div class="step-number">1</div>
                    <h3>Pilih Menu</h3>
                    <p>Pilih makanan dan minuman yang Anda inginkan.</p>
                </div>

                <div>
                    <div class="step-number">2</div>
                    <h3>Buat Pesanan</h3>
                    <p>Pilih item dan jumlah lalu konfirmasi pesanan.</p>
                </div>

                <div>
                    <div class="step-number">3</div>
                    <h3>Pembayaran</h3>
                    <p>Lakukan pembayaran di kasir dan tunggu nota.</p>
                </div>

                <div>
                    <div class="step-number">4</div>
                    <h3>Pesanan Diproses</h3>
                    <p>Pesanan diproses oleh tim dapur kami.</p>
                </div>

                <div>
                    <div class="step-number">5</div>
                    <h3>Disajikan</h3>
                    <p>Pesanan siap dan diantar langsung ke meja Anda.</p>
                </div>

            </div>

        </div>
    </section>

    <!-- FOOTER -->

    <footer id="kontak">
        <div class="container">

            <div class="footer-grid">

                <div>
                    <div class="footer-logo">

                        <img src="/images/logo_putih.png" alt="logo">

                        <div>
                            <h2>sarasa</h2>
                            <p>RESTORAN</p>
                        </div>

                    </div>
                    <p>
                        Restoran Sarasa hadir untuk memberikan pengalaman kuliner terbaik.
                    </p>
                </div>

                <div>
                    <h3>Kontak Kami</h3>
                    <p><i class="fa-solid fa-phone"></i> 0812 3456 7890</p>
                    <p><i class="fa-solid fa-envelope"></i> sarasarestoran@gmail.com</p>
                    <p><i class="fa-solid fa-location-dot"></i> Jl. Kuliner No.123</p>
                </div>

                <div>
                    <h3>Jam Operasional</h3>
                    <p><i class="fa-regular fa-clock"></i> Senin - Minggu</p>
                    <p>09.00 - 22.00 WIB</p>
                </div>

                <div>
                    <h3>Ikuti Kami</h3>
                    <div class="social-icons">

                        <a href="https://instagram.com" target="_blank">
                            <i class="fa-brands fa-instagram"></i>
                        </a>

                        <a href="https://facebook.com" target="_blank">
                            <i class="fa-brands fa-facebook-f"></i>
                        </a>

                        <a href="https://tiktok.com" target="_blank">
                            <i class="fa-brands fa-tiktok"></i>
                        </a>

                    </div>
                </div>

            </div>

            <div class="copyright">
                © 2026 Restoran Sarasa
            </div>

        </div>
    </footer>

</body>
</html>
