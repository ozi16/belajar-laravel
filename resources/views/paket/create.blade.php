@extends('layout.app');
@section('content')
    <div class="card">
        <h3 class="card-header">{{ $title ?? '' }}</h3>
        <div class="card-body">
            <form action="{{ route('service.store') }} " method="POST">
                @csrf
                <div class="mb-3">
                    <label for="">Nama Paket</label>
                    <input type="text" name="service_name" placeholder="Nama" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="">Harga</label>
                    <input type="number" name="price" placeholder="Harga" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="">Deskripsi</label>
                    <input type="text" name="description" placeholder="Deskripsi" class="form-control">
                </div>
                <div class="mb-3">
                    <button class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
@endsection
