@extends('layout.layout')
@section('judul', 'LOGIN')
@section('isi')
    <div class="login">
        <div class="judul">
            <h1>Login <span> Admin</span></h1>
            <form action="{{ route('postlogin') }}" method="post">
                @csrf
                <div class="email">
                    <label for="email">email</label><br>
                    <input type="text" name="email" class="email">
                </div>
                <div class="password">
                    <label for="password">password</label><br>
                    <input type="password" name="password" class="password">
                </div>
                <button>Login</button>
                @if (session('pesan'))
                    <p style="color: green">
                        {{ session('pesan') }}
                    </p>
                @endif
            </form>
        </div>
    </div>
@endsection
