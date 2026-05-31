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
    padding:35px;
}

.page-title{
    font-size:58px;
    font-weight:700;
    margin-bottom:5px;
}

.page-subtitle{
    font-size:22px;
    color:#444;
    margin-bottom:30px;
}

.profile-wrapper{
    border:2px solid #bdbdbd;
    border-radius:20px;
    padding:28px;
    display:flex;
    gap:25px;
}

.left-card{
    width:400px;
    border:2px solid #bdbdbd;
    border-radius:18px;
    padding:25px;
    text-align:center;
}

.left-card img{
    width:180px;
    margin-bottom:15px;
}

.left-card h2{
    font-size:28px;
}

.left-card p{
    font-size:18px;
    color:#444;
}

.profile-line{
    height:2px;
    background:#ccc;
    margin:20px 0;
}

.btn-profile{
    display:block;
    width:100%;
    background:#5a0010;
    color:white;
    text-decoration:none;
    padding:14px;
    border-radius:12px;
    font-size:22px;
    margin-bottom:15px;
}

.btn-password{
    display:block;
    width:100%;
    background:white;
    color:#5a0010;
    border:2px solid #5a0010;
    text-decoration:none;
    padding:14px;
    border-radius:12px;
    font-size:22px;
}

.right-content{
    flex:1;
}

.right-content h2{
    font-size:38px;
    margin-bottom:25px;
}

.info-row{
    display:flex;
    border-bottom:2px solid #d5d5d5;
    padding:18px 0;
}

.info-label{
    width:250px;
    font-size:22px;
}

.info-value{
    font-size:22px;
}

/* EDIT PW */

.modal{
    display:none;
    position:fixed;
    top:0;
    left:0;
    width:100%;
    height:100%;
    background:rgba(0,0,0,0.5);
    justify-content:center;
    align-items:center;
    z-index:9999;
}

.popup-content{
    width:560px;
    background:white;
    border-radius:20px;
    padding:30px;
}

.popup-content h2{
    font-size:48px;
    margin-bottom:5px;
}

.popup-subtitle{
    font-size:18px;
    color:#444;
}

.popup-content hr{
    margin:15px 0 25px;
    border:none;
    border-top:3px solid #ddd;
}

.popup-content label{
    display:block;
    font-size:22px;
    font-weight:700;
    margin-bottom:10px;
    margin-top:25px;
}

.password-box{
    position:relative;
}

.password-box input{
    width:100%;
    height:55px;
    border:3px solid #bbb;
    border-radius:15px;
    padding:0 20px;
    font-size:20px;
}

.password-box i{
    position:absolute;
    right:18px;
    top:50%;
    transform:translateY(-50%);
    cursor:pointer;
}

.info-box{
    margin-top:25px;
    background:#eef6ff;
    color:#333;
    padding:15px;
    border-radius:12px;
    display:flex;
    align-items:center;
    gap:10px;
}

.popup-buttons{
    display:flex;
    gap:15px;
    margin-top:25px;
}

.btn-cancel{
    flex:1;
    background:white;
    border:3px solid #5a0010;
    color:#5a0010;
    padding:14px;
    border-radius:12px;
    font-size:20px;
    font-weight:600;
}

.btn-save{
    flex:1;
    background:#5a0010;
    border:none;
    color:white;
    padding:14px;
    border-radius:12px;
    font-size:20px;
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

        <a href="/logout">
            <i class="fa-solid fa-right-from-bracket"></i>
            Logout
        </a>

    </div>

</div>

<!-- MAIN -->

<div class="main">

    <h1 class="page-title">
        Profil saya
    </h1>

    <p class="page-subtitle">
        Kelola informasi profil dan akun Anda
    </p>

    <div class="profile-wrapper">

        <div class="left-card">

            <img
            src="https://cdn-icons-png.flaticon.com/512/149/149071.png">

            <h2>{{ Auth::user()->nama }}</h2>

            <p>Pelanggan</p>

            <div class="profile-line"></div>

            <a href="#" class="btn-profile">
                <i class="fa-solid fa-pen"></i>
                Edit Profil
            </a>

            <button class="btn-password" onclick="openPasswordModal()">
                <i class="fa-solid fa-lock"></i>
                Ubah Password
            </button>

        </div>

        <div class="right-content">

            <h2>Informasi Pribadi</h2>

            <div class="info-row">
                <div class="info-label">
                    Nama Lengkap
                </div>

                <div class="info-value">
                    {{ Auth::user()->nama }}
                </div>
            </div>

            <div class="info-row">
                <div class="info-label">
                    Username
                </div>

                <div class="info-value">
                    {{ Auth::user()->username }}
                </div>
            </div>

            <div class="info-row">
                <div class="info-label">
                    Email
                </div>

                <div class="info-value">
                    {{ Auth::user()->email }}
                </div>
            </div>

            <div class="info-row">
                <div class="info-label">
                    No. Telepon
                </div>

                <div class="info-value">
                    {{ Auth::user()->nomor_telepon }}
                </div>
            </div>

        </div>

    </div>

</div>

<div id="passwordModal" class="modal">

    <div class="popup-content">

        <h2>Ubah Password</h2>

        <p class="popup-subtitle">
            Pastikan password baru Anda kuat dan aman
        </p>

        <hr>

        <form action="/ubah-password" method="POST">

            @csrf

            <label>Password Lama</label>

            <div class="password-box">

                <input
                    type="password"
                    name="password_lama"
                    required
                >

                <i class="fa-solid fa-eye"
                onclick="togglePassword(this)">
                </i>

            </div>

            <label>Password Baru</label>

            <div class="password-box">

                <input
                    type="password"
                    name="password_baru"
                    required
                >

                <i class="fa-solid fa-eye"
                onclick="togglePassword(this)">
                </i>

            </div>

            <label>Konfirmasi Password Baru</label>

            <div class="password-box">

                <input
                    type="password"
                    name="password_baru_confirmation"
                    required
                >

                <i class="fa-solid fa-eye"
                onclick="togglePassword(this)">
                </i>

            </div>

            <div class="info-box">

                <i class="fa-solid fa-circle-info"></i>

                Jangan bagikan password Anda kepada siapapun

            </div>

            <div class="popup-buttons">

                <button
                    type="button"
                    class="btn-cancel"
                    onclick="closePasswordModal()"
                >
                    Batal
                </button>

                <button
                    type="submit"
                    class="btn-save"
                >
                    Simpan Perubahan
                </button>

            </div>

        </form>

    </div>

</div>

<script>
    
function togglePassword(icon){

    let input =
    icon.parentElement.querySelector('input');

    if(input.type === 'password'){

        input.type = 'text';

        icon.classList.remove('fa-eye');
        icon.classList.add('fa-eye-slash');

    }else{

        input.type = 'password';

        icon.classList.remove('fa-eye-slash');
        icon.classList.add('fa-eye');

    }

}

function openPasswordModal(){
    document.getElementById('passwordModal').style.display = 'flex';
}

function closePasswordModal(){
    document.getElementById('passwordModal').style.display = 'none';
}

</script>

<script>

function openPasswordModal(){
    document.getElementById('passwordModal').style.display = 'flex';
}

function closePasswordModal(){
    document.getElementById('passwordModal').style.display = 'none';
}

</script>

</body>
</html>