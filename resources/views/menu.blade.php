<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu - Sarasa</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <style>

        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
            font-family:'Poppins', sans-serif;
        }

        body{
            background:#ffffff;
            padding:40px;
        }

        /* TAB */

        .menu-tab{
            display:flex;
            justify-content:center;
            gap:150px;
            border-bottom:2px solid #ccc;
            margin-bottom:40px;
        }

        .menu-tab a{
            text-decoration:none;
            color:black;
            font-size:40px;
            font-weight:700;
            padding-bottom:20px;
            position:relative;
        }

        .menu-tab .active{
            color:#5a0010;
        }

        .menu-tab .active::after{
            content:'';
            width:230px;
            height:4px;
            background:#5a0010;
            position:absolute;
            left:50%;
            transform:translateX(-50%);
            bottom:-2px;
        }

        /* GRID */

        .menu-grid{
            display:grid;
            grid-template-columns:repeat(3,1fr);
            gap:40px;
        }

        .card{
            border:3px solid #cfcfcf;
            border-radius:20px;
            overflow:hidden;
            transition:0.3s;
        }

        .card:hover{
            transform:translateY(-5px);
        }

        .card img{
            width:100%;
            height:280px;
            object-fit:cover;
        }

        .card-body{
            padding:20px;
        }

        .card-body h2{
            color:#5a0010;
            font-size:30px;
            margin-bottom:10px;
        }

        .price{
            font-size:24px;
            color:#444;
        }

    </style>
</head>
<body>

    <!-- TAB -->

    <div class="menu-tab">

        <a href="#" class="active">
            Makanan
        </a>

        <a href="#">
            Minuman
        </a>

        <a href="#">
            Dessert
        </a>

    </div>

    <!-- MENU -->

    <div class="menu-grid">

        <div class="card">

            <img src="/images/nasi_goreng.jpeg">

            <div class="card-body">
                <h2>Nasi Goreng</h2>
                <p class="price">Rp 20.000</p>
            </div>

        </div>

        <div class="card">

            <img src="/images/ayam_geprek.jpeg">

            <div class="card-body">
                <h2>Ayam Geprek</h2>
                <p class="price">Rp 15.000</p>
            </div>

        </div>

        <div class="card">

            <img src="/images/ayam_bakar.jpeg">

            <div class="card-body">
                <h2>Ayam Bakar</h2>
                <p class="price">Rp 20.000</p>
            </div>

        </div>

        <div class="card">

            <img src="/images/makanan.jpeg">

            <div class="card-body">
                <h2>Spaghetti</h2>
                <p class="price">Rp 20.000</p>
            </div>

        </div>

        <div class="card">

            <img src="/images/mie_jawa.jpeg">

            <div class="card-body">
                <h2>Mie Goreng Jawa</h2>
                <p class="price">Rp 15.000</p>
            </div>

        </div>

    </div>

</body>
</html>