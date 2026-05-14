<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - Sarasa</title>

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
            background:#5a0010;
            min-height:100vh;
            display:flex;
            justify-content:center;
            align-items:center;
            padding:40px 0;
        }

        .register-box{
            width:500px;
            background:white;
            border-radius:30px;
            padding:40px;
        }

        .top-register{
            display:flex;
            justify-content:space-between;
            align-items:center;
            margin-bottom:30px;
        }

        .logo-area{
            display:flex;
            align-items:center;
            gap:10px;
        }

        .logo-img{
            width:45px;
        }

        .logo-title{
            color:#5a0010;
            font-weight:700;
            font-size:24px;
        }

        .logo-text{
            font-size:10px;
            letter-spacing:2px;
            color:#5a0010;
        }

        .login-link{
            font-size:14px;
        }

        .login-link a{
            color:#5a0010;
            font-weight:700;
        }

        h1{
            color:#5a0010;
            margin-bottom:10px;
        }

        .desc{
            color:#666;
            margin-bottom:30px;
        }

        .input-group{
            margin-bottom:18px;
        }

        .input-group label{
            display:block;
            margin-bottom:8px;
            font-weight:600;
        }

        .input-group input{
            width:100%;
            padding:16px 20px;
            border:2px solid #ddd;
            border-radius:40px;
            outline:none;
            font-size:14px;
        }

        .agree{
            display:flex;
            align-items:flex-start;
            gap:10px;
            margin:20px 0 30px;
        }

        .agree input{
            width:20px;
            height:20px;
            margin-top:2px;
        }

        .agree p{
            font-size:14px;
            line-height:1.5;
        }

        .agree span{
            color:#5a0010;
            font-weight:700;
        }

        .btn-register{
            width:100%;
            padding:16px;
            border:none;
            border-radius:40px;
            background:#5a0010;
            color:white;
            font-size:16px;
            font-weight:600;
            cursor:pointer;
            transition:0.3s;
        }

        .btn-register:hover{
            background:#3d000b;
        }

    </style>
</head>
<body>

    <div class="register-box">

        <div class="top-register">

            <div class="logo-area">

                <img src="/images/logo.png" class="logo-img">

                <div>
                    <div class="logo-title">sarasa</div>
                    <div class="logo-text">RESTORAN</div>
                </div>

            </div>

            <div class="login-link">
                Sudah punya akun?
                <a href="/login">Login</a>
            </div>

        </div>

        <h1>Daftar akun baru</h1>

        <p class="desc">
            Buat akun untuk mulai memesan makanan favorit Anda.
        </p>

        <div class="input-group">
            <label>Nama lengkap</label>
            <input type="text" placeholder="Masukkan nama lengkap Anda">
        </div>

        <div class="input-group">
            <label>Email</label>
            <input type="email" placeholder="Masukkan email Anda">
        </div>

        <div class="input-group">
            <label>Nomor telepon</label>
            <input type="text" placeholder="Masukkan nomor telepon Anda">
        </div>

        <div class="input-group">
            <label>Username</label>
            <input type="text" placeholder="Masukkan username Anda">
        </div>

        <div class="input-group">
            <label>Password</label>
            <input type="password" placeholder="Masukkan password Anda">
        </div>

        <div class="input-group">
            <label>Konfirmasi Password</label>
            <input type="password" placeholder="Ulangi password Anda">
        </div>

        <div class="agree">

            <input type="checkbox">

            <p>
                Saya setuju dengan
                <span>Syarat & Ketentuan</span>
                dan
                <span>Kebijakan Privasi</span>
            </p>

        </div>

        <button class="btn-register">
            Daftar sekarang
        </button>

    </div>

</body>
</html>