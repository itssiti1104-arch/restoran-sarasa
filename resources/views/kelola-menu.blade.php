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
    width:280px;
    min-height:100vh;
    background:#5a0010;
    color:white;
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
    font-size:12px;
    letter-spacing:3px;
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
}

.menu a:hover,
.menu .active{
    background:white;
    color:#5a0010;
}

.menu i{
    font-size:30px;
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

            <a href="/kelola-menu" class="active">
                <i class="fa-solid fa-utensils"></i>
                Kelola Menu
            </a>

            <a href="/laporan-penjualan">
                <i class="fa-solid fa-chart-column"></i>
                Laporan Penjualan
            </a>

            <a href="/manajemen-akun">
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

            <h1>Kelola Menu</h1>

            <p>
                Kelola data menu restoran
                (tambah, ubah dan hapus)
            </p>

        </div>

        <button
            class="btn-tambah"
            id="openModal"
        >

            <i class="fa-solid fa-plus"></i>
            Tambah Menu

        </button>

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
                    {{ $menu->stok }}
                </td>

                <td style="display:flex; justify-content:center; gap:10px;">

                    <button
                        class="edit-btn openEditModal"

                        data-id="{{ $menu->id }}"
                        data-nama="{{ $menu->nama_menu }}"
                        data-kategori="{{ $menu->kategori }}"
                        data-harga="{{ $menu->harga }}"
                        data-gambar="{{ asset('images/'.$menu->gambar) }}"
                    >
                        <i class="fa-solid fa-pen"></i>
                    </button>

                    <form
                        action="/hapus-menu/{{ $menu->id }}"
                        method="POST"
                        onsubmit="return confirm('Yakin ingin menghapus menu ini?')"
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

<div class="modal" id="menuModal">

    <div class="modal-box">

        <div class="modal-header">

            <h2>
                <i class="fa-solid fa-plus"></i>
                Tambah Menu
            </h2>

            <button
                class="close-btn"
                id="closeModal"
            >
                ×
            </button>

        </div>

        <div class="modal-body">

            <form
                action="/tambah-menu"
                method="POST"
                enctype="multipart/form-data"
            >

                @csrf

                <div class="form-group">

                    <label>Nama Menu</label>

                    <input
                        type="text"
                        name="nama_menu"
                        value="{{ old('nama_menu') }}"
                    >

                    @error('nama_menu')
                    <p style="color:red; margin-top:5px;">
                        {{ $message }}
                    </p>
                    @enderror

                </div>

                <div class="form-group">

                    <label>Kategori</label>

                    <select name="kategori">

                        <option value="">Pilih Kategori</option>

                        <option value="Makanan"
                            {{ old('kategori') == 'Makanan' ? 'selected' : '' }}>
                            Makanan
                        </option>

                        <option value="Minuman"
                            {{ old('kategori') == 'Minuman' ? 'selected' : '' }}>
                            Minuman
                        </option>

                        <option value="Dessert"
                            {{ old('kategori') == 'Dessert' ? 'selected' : '' }}>
                            Dessert
                        </option>

                    </select>

                    @error('kategori')
                    <p style="color:red; margin-top:5px;">
                        {{ $message }}
                    </p>
                    @enderror

                </div>

                <div class="form-group">

                    <label>Harga (Rp)</label>

                    <input
                        type="number"
                        name="harga"
                        value="{{ old('harga') }}"
                    >

                    @error('harga')
                    <p style="color:red; margin-top:5px;">
                        {{ $message }}
                    </p>
                    @enderror

                </div>

                <div class="form-group">

                    <label>Foto</label>

                    <input
                        type="file"
                        name="gambar"
                    >

                    @error('gambar')
                    <p style="color:red; margin-top:5px;">
                        {{ $message }}
                    </p>
                    @enderror

                </div>

                <div class="modal-actions">

                    <button
                        type="button"
                        class="cancel-btn"
                        id="cancelModal"
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

<div class="modal" id="editMenuModal">

    <div class="modal-box">

        <div class="modal-header">

            <h2>
                <i class="fa-solid fa-pen"></i>
                Edit Menu
            </h2>

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
                enctype="multipart/form-data"
                id="editMenuForm"
            >

                @csrf
                @method('PUT')

                <div class="form-group">

                    <label>Nama Menu</label>

                    <input
                        type="text"
                        name="nama_menu"
                        id="editNamaMenu"
                        required
                    >

                </div>

                <div class="form-group">

                    <label>Kategori</label>

                    <select
                        name="kategori"
                        id="editKategori"
                        required
                    >
                        <option value="makanan">Makanan</option>
                        <option value="minuman">Minuman</option>
                        <option value="dessert">Dessert</option>
                    </select>

                </div>

                <div class="form-group">

                    <label>Harga (Rp)</label>

                    <input
                        type="number"
                        name="harga"
                        id="editHarga"
                        min="1"
                        required
                    >

                </div>

                <div class="form-group">

                    <label>Foto Saat Ini</label>

                    <img
                        id="previewFoto"
                        src=""
                        style="
                            width:120px;
                            height:120px;
                            object-fit:cover;
                            border-radius:10px;
                            margin-bottom:10px;
                            display:block;
                        "
                    >

                </div>

                <div class="form-group">

                    <label>Foto Baru</label>

                    <input
                        type="file"
                        name="gambar"
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

const modal =
document.getElementById('menuModal');

document
.getElementById('openModal')
.onclick = () => {

    modal.style.display='flex';

};

document
.getElementById('closeModal')
.onclick = () => {

    modal.style.display='none';

};

document
.getElementById('cancelModal')
.onclick = () => {

    modal.style.display='none';

};

</script>

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

        document.getElementById('editKategori').value =
        button.dataset.kategori;

        document.getElementById('editHarga').value =
        button.dataset.harga;

        document.getElementById('previewFoto').src =
        button.dataset.gambar;

        editForm.action =
        '/update-menu/' + button.dataset.id;

        editModal.style.display = 'flex';

    });

});

document
.getElementById('closeEditModal')
.onclick = () => {

    editModal.style.display = 'none';

};

document
.getElementById('cancelEditModal')
.onclick = () => {

    editModal.style.display = 'none';

};

</script>

@if(session('modal') == 'tambah')
<script>
document.getElementById('menuModal').style.display = 'flex';
</script>
@endif

</body>
</html>