<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Sarasa</title>

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
            height:100vh;
            display:flex;
            justify-content:center;
            align-items:center;
        }

        .login-box{
            width:450px;
            background:white;
            border-radius:30px;
            padding:50px;
        }

        .login-box h1{
            text-align:center;
            color:#5a0010;
            margin-bottom:10px;
        }

        .login-box .desc{
            text-align:center;
            margin-bottom:40px;
            color:#555;
        }

        .input-group{
            margin-bottom:20px;
        }

        .input-group label{
            display:block;
            margin-bottom:10px;
            font-weight:600;
        }

        .input-group input{
            width:100%;
            padding:16px 20px;
            border:2px solid #ddd;
            border-radius:40px;
            outline:none;
            font-size:15px;
        }

        .remember{
            display:flex;
            justify-content:space-between;
            align-items:center;
            margin-bottom:30px;
        }

        .remember-left{
            display:flex;
            align-items:center;
            gap:10px;
        }

        .remember input{
            width:20px;
            height:20px;
        }

        .remember a{
            color:#5a0010;
            font-weight:600;
            text-decoration:none;
        }

        .btn-login{
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

        .btn-login:hover{
            background:#3d000b;
        }

        .register-text{
            text-align:center;
            margin-top:30px;
        }

        .register-text a{
            color:#5a0010;
            font-weight:700;
        }

    </style>
</head>
<body>

    <div class="login-box">

        <h1>Login</h1>

        <p class="desc">
            Masuk untuk melanjutkan ke akun anda
        </p>

        <div class="input-group">
            <label>Username</label>
            <input type="text" placeholder="Masukkan username Anda">
        </div>

        <div class="input-group">
            <label>Password</label>
            <input type="password" placeholder="Masukkan password Anda">
        </div>

        <div class="remember">

            <div class="remember-left">
                <input type="checkbox">
                <span>Ingat saya</span>
            </div>

            <a href="#">Lupa password?</a>

        </div>

        <button class="btn-login">
            Masuk
        </button>

        <div class="register-text">
            Belum punya akun?
            <a href="/register">Daftar sekarang</a>
        </div>

    </div>

</body>
</html>