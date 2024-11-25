@extends('kalkulator.index')
@section('content')
    <h1>{{ $title ?? '' }}</h1>
    <form action="{{ route('user.store') }}" method="POST">
        @csrf
        <label for="">Nama</label>
        <input type="text" name="name" placeholder="masukan nama kamu">
        <br>
        <label for="">Email</label>
        <input type="email" name="email" placeholder="Masukan email kamu">
        <br>
        <label for="">Password</label>
        <input type="password" name="password" placeholder="Masukan password kamu">
        <button type="submit">simpan</button>
    </form>
@endsection
