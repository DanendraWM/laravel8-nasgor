@extends('layout.layout')
@section('judul', 'menu')
@section('menu', 'underline')
@section('isi')
    @foreach ($menus as $menu)
        <div class="card">
            <h1>- {{ $menu->nama }}</h1>
            <div class="sejajar">
                <img src="{{ url('img/' . $menu->foto) }}">
                <h3>{{ $menu->deskripsi }}</h3>
            </div>
            <div class="detail">
                <p>Jenis Menu : {{ $menu->jenis }}</p>
                <p>Harga : {{ $menu->harga }}</p>
            </div>
        </div>
        <br>
    @endforeach
@endsection
