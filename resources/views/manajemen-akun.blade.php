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

<title>Manajemen Akun</title>

<link rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"/>

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
    background:#f5f5f5;
}

/* SIDEBAR */

.sidebar{
    width:280px;
    min-height:100vh;
    background:#5a0010;
    color:white;
    display:flex;
    flex-direction:column;
    justify-content:space-between;
}

.top-sidebar{
    padding:25px;
}

.logo{
    display:flex;
    align-items:center;
    gap:15px;
    margin-bottom:50px;
}

.logo img{
    width:70px;
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
    gap:18px;
    padding:15px 20px;
    border-radius:15px;
    font-size:22px;
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
}

.logout{
    color:white;
    text-decoration:none;
    display:flex;
    align-items:center;
    gap:15px;
    font-size:22px;
}

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
    font-size:48px;
    color:#5a0010;
}

.header p{
    font-size:22px;
    color:#666;
}

.add-btn{
    background:#5a0010;
    color:white;
    border:none;
    padding:15px 25px;
    border-radius:12px;
    font-size:18px;
    font-weight:600;
    cursor:pointer;
}

.table-box{
    background:white;
    border:2px solid #bbb;
    border-radius:20px;
    overflow:hidden;
}

table{
    width:100%;
    border-collapse:collapse;
}

th{
    background:#ececec;
    padding:20px;
    font-size:20px;
}

td{
    padding:20px;
    text-align:center;
    border-top:2px solid #ddd;
    font-size:18px;
}

.role{
    padding:8px 14px;
    border-radius:8px;
    font-size:14px;
    font-weight:600;
}

.admin{
    background:#ffe9c7;
    color:#d88a00;
}

.kasir{
    background:#d7f0ff;
    color:#1592d4;
}

.dapur{
    background:#f1d7ff;
    color:#9b59b6;
}

.pelanggan{
    background:#d7ffe5;
    color:#00a651;
}

.status{
    padding:8px 14px;
    border-radius:8px;
    font-size:14px;
    font-weight:600;
}

.aktif{
    background:#d8ffd8;
    color:#2da52d;
}

.nonaktif{
    background:#ffd8d8;
    color:#d63031;
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
    position:fixed;
    inset:0;
    background:rgba(0,0,0,0.4);
    display:none;
    justify-content:center;
    align-items:center;
    z-index:999;
}

.modal-box{
    width:900px;
    background:white;
    border:5px solid #aaa;
    border-radius:20px;
    padding:30px;
}

.modal-header{
    display:flex;
    justify-content:space-between;
    align-items:center;
    margin-bottom:25px;
}

.close-btn{
    border:none;
    background:none;
    font-size:32px;
    font-weight:700;
    cursor:pointer;
}

.form-grid{
    display:grid;
    grid-template-columns:1fr 1fr;
    gap:25px 40px;
}

.form-group label{
    display:block;
    font-size:22px;
    font-weight:700;
    margin-bottom:8px;
}

.form-group input,
.form-group select{
    width:100%;
    padding:14px 16px;
    border:2px solid #999;
    border-radius:10px;
    font-size:18px;
    outline:none;
}

.modal-actions{
    display:flex;
    justify-content:center;
    gap:20px;
    margin-top:35px;
}

.cancel-btn,
.save-btn{
    padding:14px 40px;
    border-radius:10px;
    font-size:22px;
    font-weight:700;
    cursor:pointer;
}

.cancel-btn{
    border:4px solid #5a0010;
    background:white;
    color:#5a0010;
}

.save-btn{
    border:none;
    background:#5a0010;
    color:white;
}

</style>
</head>
<body>

<div class="sidebar">

    <div class="top-sidebar">

        <div class="logo">

            <img src="/images/logo_putih.png">

            <div class="logo-text">
                <h1>sarasa</h1>
                <p>RESTORAN</p>
            </div>

        </div>

        <div class="menu">

            <a href="/admin">
                <i class="fa-solid fa-house"></i>
                Beranda
            </a>

            <a href="/kelola-menu">
                <i class="fa-solid fa-utensils"></i>
                Kelola Menu
            </a>

            <a href="/laporan-penjualan">
                <i class="fa-solid fa-chart-column"></i>
                Laporan Penjualan
            </a>

            <a href="/manajemen-akun" class="active">
                <i class="fa-regular fa-user"></i>
                Manajemen Akun
            </a>

            <a href="/logout">
                <i class="fa-solid fa-right-from-bracket"></i>
                Logout
            </a>

        </div>

    </div>

</div>

<div class="main">

    <div class="header">

        <div>
            <h1>Manajemen Akun</h1>
            <p>Kelola akun pengguna</p>
        </div>

        <button class="add-btn" id="openModal">
            + Tambah Akun
        </button>

    </div>

    <div class="table-box">

        <table>

            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Username</th>
                <th>Role</th>
                <th>No Telpon</th>
                <th>Email</th>
                <th>Status</th>
                <th>Terdaftar</th>
                <th>Aksi</th>
            </tr>

            @foreach($users as $user)

            <tr>

                <td>{{ $loop->iteration }}</td>

                <td>{{ $user->nama }}</td>

                <td>{{ $user->username }}</td>

                <td>
                    <span class="role {{ strtolower($user->role) }}">
                        {{ ucfirst($user->role) }}
                    </span>
                </td>

                <td>{{ $user->nomor_telepon }}</td>

                <td>{{ $user->email }}</td>

                <td>
                    <span class="status {{ strtolower($user->status) }}">
                        {{ ucfirst($user->status) }}
                    </span>
                </td>

                <td>
                    {{ $user->created_at->format('d M Y') }}
                </td>

                <td style="display:flex; justify-content:center; gap:10px;">

                    <!-- BUTTON EDIT -->

                    <button
                        class="edit-btn openEditModal"

                        data-id="{{ $user->id }}"
                        data-nama="{{ $user->nama }}"
                        data-email="{{ $user->email }}"
                        data-telepon="{{ $user->nomor_telepon }}"
                        data-username="{{ $user->username }}"
                        data-role="{{ $user->role }}"
                        data-status="{{ $user->status }}"
                    >

                        <i class="fa-solid fa-pen"></i>

                    </button>

                    <!-- BUTTON HAPUS -->

                    <form
                        action="/hapus-akun/{{ $user->id }}"
                        method="POST"
                        onsubmit="return confirm('Yakin ingin menghapus akun ini?')"
                    >

                        @csrf
                        @method('DELETE')

                        <button
                            type="submit"
                            class="delete-btn"
                        >
                            <i class="fa-solid fa-trash"></i>
                        </button>

                    </form>

                </td>


            </tr>

            @endforeach

        </table>

    </div>

</div>

<!-- MODAL TAMBAH -->

<div class="modal" id="accountModal">

    <div class="modal-box">

        <div class="modal-header">
            <h2>Tambah Akun</h2>

            <button type="button" class="close-btn" id="closeModal">
                x
            </button>
        </div>

        <form action="/tambah-akun" method="POST">

            @csrf

            <div class="form-grid">

                <div class="form-group">
                    <label>Nama</label>

                    <input type="text" name="nama">
                </div>

                <div class="form-group">
                    <label>Username</label>

                    <input type="text" name="username">
                </div>

                <div class="form-group">
                    <label>Role</label>

                    <select name="role">

                        <option value="admin">Admin</option>

                        <option value="kasir">Kasir</option>

                        <option value="dapur">Dapur</option>

                        <option value="pelanggan">Pelanggan</option>

                    </select>
                </div>

                <div class="form-group">
                    <label>No. Telpon</label>

                    <input type="text" name="nomor_telepon">
                </div>

                <div class="form-group">
                    <label>Email</label>

                    <input type="email" name="email">
                </div>

                <div class="form-group">
                    <label>Password</label>

                    <input type="password" name="password">
                </div>

            </div>

            <div class="modal-actions">

                <button type="button" class="cancel-btn" id="cancelModal">
                    Batal
                </button>

                <button type="submit" class="save-btn">
                    Simpan
                </button>

            </div>

        </form>

    </div>

</div>

<!-- MODAL EDIT -->

<div class="modal" id="editModal">

    <div class="modal-box">

        <div class="modal-header">

            <h2>Edit Akun</h2>

            <button
                type="button"
                class="close-btn"
                id="closeEditModal"
            >
                x
            </button>

        </div>

        <form method="POST" id="editForm">

            @csrf
            @method('PUT')

            <div class="form-grid">

                <div class="form-group">
                    <label>Nama</label>

                    <input type="text" name="nama" id="editNama">
                </div>

                <div class="form-group">
                    <label>Username</label>

                    <input type="text" name="username" id="editUsername">
                </div>

                <div class="form-group">
                    <label>Role</label>

                    <select name="role" id="editRole">

                        <option value="admin">Admin</option>

                        <option value="kasir">Kasir</option>

                        <option value="dapur">Dapur</option>

                        <option value="pelanggan">Pelanggan</option>

                    </select>
                </div>

                <div class="form-group">
                    <label>No. Telpon</label>

                    <input
                        type="text"
                        name="nomor_telepon"
                        id="editTelepon"
                    >
                </div>

                <div class="form-group">
                    <label>Email</label>

                    <input type="email" name="email" id="editEmail">
                </div>

                <div class="form-group">
                    <label>Password Baru</label>

                    <input
                        type="password"
                        name="password"
                        placeholder="Kosongkan jika tidak diubah"
                    >
                </div>

                <div class="form-group">
                    <label>Status</label>

                    <select name="status" id="editStatus">

                        <option value="aktif">Aktif</option>

                        <option value="nonaktif">Nonaktif</option>

                    </select>
                </div>

            </div>

            <div class="modal-actions">

                <button
                    type="button"
                    class="cancel-btn"
                    id="cancelEditModal"
                >
                    Batal
                </button>

                <button type="submit" class="save-btn">
                    Simpan
                </button>

            </div>

        </form>

    </div>

</div>

<script>

const openModal = document.getElementById('openModal');
const closeModal = document.getElementById('closeModal');
const cancelModal = document.getElementById('cancelModal');
const accountModal = document.getElementById('accountModal');

openModal.addEventListener('click', () => {
    accountModal.style.display = 'flex';
});

closeModal.addEventListener('click', () => {
    accountModal.style.display = 'none';
});

cancelModal.addEventListener('click', () => {
    accountModal.style.display = 'none';
});

const editModal = document.getElementById('editModal');

const closeEditModal = document.getElementById('closeEditModal');

const cancelEditModal = document.getElementById('cancelEditModal');

const editButtons = document.querySelectorAll('.openEditModal');

const editForm = document.getElementById('editForm');

editButtons.forEach(button => {

    button.addEventListener('click', () => {

        const id = button.dataset.id;

        document.getElementById('editNama').value =
        button.dataset.nama;

        document.getElementById('editUsername').value =
        button.dataset.username;

        document.getElementById('editEmail').value =
        button.dataset.email;

        document.getElementById('editTelepon').value =
        button.dataset.telepon;

        document.getElementById('editRole').value =
        button.dataset.role;

        document.getElementById('editStatus').value =
        button.dataset.status;

        editForm.action = '/update-akun/' + id;

        editModal.style.display = 'flex';

    });

});

closeEditModal.addEventListener('click', () => {
    editModal.style.display = 'none';
});

cancelEditModal.addEventListener('click', () => {
    editModal.style.display = 'none';
});

</script>

</body>
</html>

