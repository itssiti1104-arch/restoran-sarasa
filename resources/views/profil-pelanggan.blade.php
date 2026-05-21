<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Profil Saya</title>

<link rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"/>

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
    display:flex;
    background:white;
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
    padding:40px 60px;
}

.title{
    font-size:60px;
    text-align:center;
    margin-bottom:40px;
}

/* CONTENT */

.profile-container{
    display:flex;
    justify-content:space-between;
    gap:70px;
}

.form-section{
    flex:1;
}

.form-group{
    margin-bottom:20px;
}

.form-group label{
    display:block;
    font-size:28px;
    font-weight:700;
    margin-bottom:8px;
}

.form-group input{
    width:100%;
    height:65px;
    border:4px solid #b5b5b5;
    border-radius:15px;
    padding:0 18px;
    font-size:24px;
    outline:none;
}

/* PASSWORD */

.password-box{
    position:relative;
}

.password-box i{
    position:absolute;
    right:20px;
    top:50%;
    transform:translateY(-50%);
    font-size:26px;
    cursor:pointer;
}

/* BUTTON */

.save-btn{
    margin-top:20px;
    background:#5a0010;
    color:white;
    border:none;
    padding:18px 45px;
    border-radius:15px;
    font-size:24px;
    font-weight:600;
    cursor:pointer;
}

/* CARD */

.profile-card{
    width:430px;
    height:560px;
    border:4px solid #b5b5b5;
    border-radius:20px;
    padding:40px 30px;
    text-align:center;
}

.profile-card img{
    width:220px;
    margin-bottom:20px;
}

.profile-card h2{
    font-size:34px;
    margin-bottom:5px;
}

.profile-card p{
    font-size:28px;
    color:#333;
}

.profile-line{
    width:100%;
    height:4px;
    background:#d1d1d1;
    margin-top:30px;
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

        <a href="/riwayat-pesanan">
            <i class="fa-solid fa-clipboard-list"></i>
            Riwayat Pesanan
        </a>

        <a href="/status-pesanan">
            <i class="fa-solid fa-bell-concierge"></i>
            Status Pesanan
        </a>

        <a href="/profil-pelanggan" class="active">
            <i class="fa-regular fa-user"></i>
            Profil Saya
        </a>

        <a href="/">
            <i class="fa-solid fa-right-from-bracket"></i>
            Logout
        </a>

    </div>

</div>

<!-- MAIN -->

<div class="main">

    <h1 class="title">Data Diri</h1>

    <div class="profile-container">

        <!-- FORM -->

        <div class="form-section">

            <div class="form-group">
                <label>Nama Lengkap</label>
                <input type="text" value="Dina Rahma Firzana">
            </div>

            <div class="form-group">
                <label>Username</label>
                <input type="text" value="dina.rahma">
            </div>

            <div class="form-group">
                <label>Email</label>
                <input type="email" value="dina@gmail.com">
            </div>

            <div class="form-group">
                <label>No. Telepon</label>
                <input type="text" value="0856789019087">
            </div>

            <div class="form-group">
                <label>Ubah Password</label>

                <div class="password-box">
                    <input type="password" value="dina123" id="password">
                    <i class="fa-solid fa-eye" onclick="togglePassword('password')"></i>
                </div>
            </div>

            <div class="form-group">
                <label>Konfirmasi Password</label>

                <div class="password-box">
                    <input type="password" value="dina123" id="confirmPassword">
                    <i class="fa-solid fa-eye" onclick="togglePassword('confirmPassword')"></i>
                </div>
            </div>

            <button class="save-btn">
                Simpan Perubahan
            </button>

        </div>

        <!-- CARD -->

        <div class="profile-card">

            <img src="/images/profile.png">

            <h2>Dina Rahma Firzana</h2>

            <p>Pelanggan</p>

            <div class="profile-line"></div>

        </div>

    </div>

</div>

<script>

function togglePassword(id){

    const input = document.getElementById(id);

    if(input.type === "password"){
        input.type = "text";
    }else{
        input.type = "password";
    }

}

</script>

</body>
</html>