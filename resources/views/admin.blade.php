@extends('layout.layadmin')
@section('judul')
@section('isi')
    <div class="admin">
        <h1>Halaman tambah menu</h1>
        <hr>
    </div>
    @if (session('pesan'))
        <p class="alert">
            {{ session('pesan') }}
        </p>
    @endif
    <form action="/menu/insert" method="post" enctype="multipart/form-data">
        <div class="masukan">
            @csrf
            <div class="pertama">
                <div class="nama">
                    <label for="nama">nama menu</label><br>
                    <input type="text" name="nama" class="nama">
                </div>
                <div class="jenis">
                    <label for="jenis">jenis menu</label><br>
                    <select name="jenis">
                        <option value="makanan">makanan</option>
                        <option value="minuman">minuman</option>
                    </select>
                </div>
            </div>
            <br>
            <div class="kedua">
                <div class="harga">
                    <label for="harga">harga menu</label><br>
                    <input type="text" name="harga" class="harga">
                </div>
                <div class="foto">
                    <label for="foto">foto menu</label><br>
                    <input type="file" name="foto" class="foto">
                </div>
            </div>
            <br>
            <div class="deskripsi">
                <label for="deskripsi">deskripsi menu</label><br>
                <input type="text" name="deskripsi" class="deskripsi">
            </div>
            <button>tambah menu</button>
        </div>
    </form>
@endsection
