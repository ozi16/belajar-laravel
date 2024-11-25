@extends('kalkulator.index')
@section('content')
    <form action="{{ route('store-bagi') }}" method="POST" style="margin-top:20px ">
        @csrf
        <label for="">Angka1</label>
        <input type="text" placeholder="masukan angka 1" name="angka1">
        <br>
        -
        <br>
        <label for="">Angka 2</label>
        <input type="text" name="angka2" placeholder="masukan angka 2">
        <br>
        <button>Proses</button>
    </form>

    <h3>Hasilnya adalah : {{ $jumlah }}</h3>
@endsection
