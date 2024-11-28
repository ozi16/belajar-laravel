@extends('layout.app');
@section('content')
    <div class="card">
        <h3 class="card-header">{{ $title ?? '' }}</h3>
        <div class="card-body">
            <form action="{{ route('service.update', $service->id) }} " method="POST">
                @csrf
                @method('put')
                <div class="mb-3">
                    <label for="">Nama Paket</label>
                    <input type="text" name="service_name" value="{{ $service->service_name }}" placeholder="Nama Paket"
                        class="form-control">
                </div>
                <div class="mb-3">
                    <label for="">Harga</label>
                    <input type="number" class="form-control" name="price" value="{{ $service->price }}"
                        placeholder="Paket">
                </div>
                <div class="mb-3">
                    <label for="">Deskripsi</label>
                    <input type="text" name="description" placeholder="description" value="{{ $service->description }}"
                        class="form-control">
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
@endsection
