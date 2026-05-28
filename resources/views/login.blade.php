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
    <title>Login - Sarasa</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- FONT AWESOME -->
    <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"/>

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

        .password-box{
            position:relative;
        }

        .password-box input{
            padding-right:55px;
        }

        .password-box i{
            position:absolute;
            right:20px;
            top:50%;
            transform:translateY(-50%);
            cursor:pointer;
            color:#777;
            font-size:18px;
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

    <form action="/login" method="POST" class="login-box">

        @csrf

        <h1>Login</h1>

        @if(session('error'))

        <p style="color:red; margin-bottom:15px;">
            {{ session('error') }}
        </p>

        @endif

        <p class="desc">
            Masuk untuk melanjutkan ke akun anda
        </p>

        <div class="input-group">

            <label>Username</label>

            <input
                type="text"
                name="username"
                placeholder="Masukkan username"
            >

        </div>

        <div class="input-group">

            <label>Password</label>

            <div class="password-box">

                <input
                    type="password"
                    name="password"
                    id="password"
                    placeholder="Masukkan password"
                >

                <i
                    class="fa-solid fa-eye"
                    id="togglePassword"
                ></i>

            </div>

        </div>

        <div class="remember">

            <div class="remember-left">

                <input type="checkbox">

                <span>Ingat saya</span>

            </div>

            <a href="#">Lupa password?</a>

        </div>

        <button type="submit" class="btn-login">
            Login
        </button>

        <div class="register-text">

            Belum punya akun?

            <a href="/register">Daftar sekarang</a>

        </div>

    </form>

    <script>

        const togglePassword =
        document.getElementById('togglePassword');

        const password =
        document.getElementById('password');

        togglePassword.addEventListener('click', () => {

            const type =
            password.getAttribute('type') === 'password'
            ? 'text'
            : 'password';

            password.setAttribute('type', type);

            togglePassword.classList.toggle('fa-eye');

            togglePassword.classList.toggle('fa-eye-slash');

        });

    </script>

</body>
</html>