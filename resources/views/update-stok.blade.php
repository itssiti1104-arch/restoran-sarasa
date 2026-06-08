<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport"
content="width=device-width, initial-scale=1.0">

<title>Kelola Menu</title>

<link rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"/>

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
rel="stylesheet">

<style>

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:'Poppins',sans-serif;
}

body{
    display:flex;
    background:#f5f5f5;
}

/* SIDEBAR */

.sidebar{
    width:300px;
    min-height:100vh;
    background:#5a0010;
    color:white;
    display:flex;
    flex-direction:column;
    justify-content:space-between;
}

.top{
    padding:25px;
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

.menu{
    display:flex;
    flex-direction:column;
    gap:20px;
}

.menu a{
    color:white;
    text-decoration:none;
    font-size:22px;
    display:flex;
    align-items:center;
    gap:18px;
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
    font-size:30px;
}

.bottom{
    border-top:2px solid white;
    padding:25px;
    display:flex;
    align-items:center;
    gap:15px;
}

.bottom img{
    width:60px;
    height:60px;
    border-radius:50%;
}

.bottom h3{
    font-size:20px;
}

.bottom p{
    font-size:14px;
}

/* MAIN */

.main{
    flex:1;
    padding:30px;
}

.header{
    display:flex;
    justify-content:space-between;
    align-items:center;
    margin-bottom:30px;
}

.header h1{
    color:#5a0010;
    font-size:45px;
}

.header p{
    font-size:20px;
}

.btn-tambah{
    background:#5a0010;
    color:white;
    text-decoration:none;
    padding:14px 22px;
    border-radius:10px;
    font-weight:600;
}

.table-box{
    background:white;
    border:2px solid #bbb;
    border-radius:18px;
    overflow:hidden;
}

table{
    width:100%;
    border-collapse:collapse;
}

th{
    background:#efefef;
    padding:18px;
    font-size:18px;
}

td{
    padding:15px;
    text-align:center;
    border-top:2px solid #ddd;
}

.menu-img{
    width:70px;
    height:70px;
    object-fit:cover;
    border-radius:8px;
}

.edit-btn{
    border:2px solid #5a0010;
    background:white;
    color:#5a0010;
    width:45px;
    height:45px;
    border-radius:10px;
    cursor:pointer;
    font-size:18px;
}

.delete-btn{
    border:2px solid #d63031;
    background:white;
    color:#d63031;
    width:45px;
    height:45px;
    border-radius:10px;
    cursor:pointer;
    font-size:18px;
}

.modal{
    display:none;
    position:fixed;
    inset:0;
    background:rgba(0,0,0,.45);
    justify-content:center;
    align-items:center;
    z-index:9999;
}

.modal-box{
    width:650px;
    background:white;
    border-radius:20px;
    overflow:hidden;
}

.modal-header{
    background:#5a0010;
    color:white;
    padding:20px 25px;
    display:flex;
    justify-content:space-between;
    align-items:center;
}

.close-btn{
    background:none;
    border:none;
    color:white;
    font-size:35px;
    cursor:pointer;
}

.modal-body{
    padding:30px;
}

.form-group{
    margin-bottom:25px;
}

.form-group label{
    display:block;
    font-size:24px;
    font-weight:700;
    margin-bottom:10px;
}

.form-group input,
.form-group select{
    width:100%;
    padding:14px;
    border:1px solid #999;
    border-radius:8px;
    font-size:18px;
}

.modal-actions{
    display:flex;
    gap:20px;
    margin-top:40px;
}

.cancel-btn{
    flex:1;
    border:3px solid #5a0010;
    background:white;
    color:#5a0010;
    padding:14px;
    border-radius:10px;
    font-size:18px;
    font-weight:700;
    cursor:pointer;
}

.save-btn{
    flex:1;
    border:none;
    background:#5a0010;
    color:white;
    padding:14px;
    border-radius:10px;
    font-size:18px;
    font-weight:700;
    cursor:pointer;
}

.modal-body{
    padding:30px;
}

.form-group{
    margin-bottom:25px;
}

</style>
</head>

<body>

<div class="sidebar">

    <div class="top">

        <div class="logo">

            <img src="/images/logo_putih.png">

            <div class="logo-text">
                <h1>sarasa</h1>
                <p>RESTORAN</p>
            </div>

        </div>

        <div class="menu">

            <a href="/dapur">
                <i class="fa-solid fa-house"></i>
                Beranda
            </a>

            <a href="/pesanan-masuk-dapur">
                <i class="fa-solid fa-clipboard-list"></i>
                Pesanan Masuk
            </a>

            <a href="/riwayat-pesanan-dapur">
                <i class="fa-solid fa-clock-rotate-left"></i>
                Riwayat Pesanan
            </a>

            <a href="/update-stok" class="active">
                <i class="fa-solid fa-box"></i>
                Update Stok
            </a>

            <a href="/laporan-harian-dapur">
                <i class="fa-solid fa-chart-column"></i>
                Laporan Harian
            </a>

            <a href="/logout">
                <i class="fa-solid fa-right-from-bracket"></i>
                Logout
            </a>

        </div>

    </div>

    <div class="bottom">

        <img src="https://cdn-icons-png.flaticon.com/512/149/149071.png">

        <div>
            <p>Dapur</p>
            <h3>{{ auth()->user()->nama }}</h3>
        </div>

    </div>

</div>

<div class="main">

    <div class="header">

        <div>

            <h1>Update Stok</h1>

        </div>

    </div>

    <div class="table-box">

        <table>

            <tr>
                <th>No</th>
                <th>Foto</th>
                <th>Nama Menu</th>
                <th>Kategori</th>
                <th>Harga</th>
                <th>Stok</th>
                <th>Aksi</th>
            </tr>

            @foreach($menus as $menu)

            <tr>

                <td>{{ $loop->iteration }}</td>

                <td>
                    <img
                        src="{{ asset('images/'.$menu->gambar) }}"
                        class="menu-img"
                    >
                </td>

                <td>{{ $menu->nama_menu }}</td>

                <td>{{ $menu->kategori }}</td>

                <td>
                    Rp {{ number_format($menu->harga,0,',','.') }}
                </td>

                <td>

                    @if($menu->stok > 0)

                        <span style="
                            background:#d4edda;
                            color:#155724;
                            padding:6px 12px;
                            border-radius:8px;
                            font-weight:600;
                        ">
                            {{ $menu->stok }}
                        </span>

                    @else

                        <span style="
                            background:#f8d7da;
                            color:#721c24;
                            padding:6px 12px;
                            border-radius:8px;
                            font-weight:600;
                        ">
                            Habis
                        </span>

                    @endif

                </td>

                <td>

                    <button
                        class="edit-btn openEditModal"
                        data-id="{{ $menu->id }}"
                        data-nama="{{ $menu->nama_menu }}"
                        data-stok="{{ $menu->stok }}"
                    >
                        <i class="fa-solid fa-pen"></i>
                    </button>

                </td>

            </tr>

            @endforeach

        </table>

    </div>

</div>

<div class="modal" id="editMenuModal">

    <div class="modal-box">

        <div class="modal-header">

            <h2>Update Stok</h2>

            <button
                class="close-btn"
                id="closeEditModal"
            >
                ×
            </button>

        </div>

        <div class="modal-body">

            <form
                method="POST"
                id="editMenuForm"
            >

                @csrf
                @method('PUT')

                <div class="form-group">

                    <label>Nama Menu</label>

                    <input
                        type="text"
                        id="editNamaMenu"
                        readonly
                    >

                </div>

                <div class="form-group">

                    <label>Jumlah Stok</label>

                    <input
                        type="number"
                        name="stok"
                        id="editStok"
                        min="0"
                        required
                    >

                </div>

                <div class="modal-actions">

                    <button
                        type="button"
                        class="cancel-btn"
                        id="cancelEditModal"
                    >
                        Batal
                    </button>

                    <button
                        type="submit"
                        class="save-btn"
                    >
                        Simpan
                    </button>

                </div>

            </form>

        </div>

    </div>

</div>

<script>

const editModal =
document.getElementById('editMenuModal');

const editButtons =
document.querySelectorAll('.openEditModal');

const editForm =
document.getElementById('editMenuForm');

editButtons.forEach(button => {

    button.addEventListener('click', () => {

        document.getElementById('editNamaMenu').value =
        button.dataset.nama;

        document.getElementById('editStok').value =
        button.dataset.stok;

        editForm.action =
        '/update-stok/' + button.dataset.id;

        editModal.style.display = 'flex';

    });

});

</script>

</body>
</html>