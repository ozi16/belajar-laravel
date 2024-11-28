@extends('layout.app');
@section('content')
    <div class="card">
        <h3 class="card-header">{{ $title ?? '' }}</h3>
        <div class="card-body">
            <form action="{{ route('customer.store') }} " method="POST">
                @csrf
                <div class="mb-3">
                    <label for="">Nama Customer</label>
                    <input type="text" name="customer_name" placeholder="Nama Customer" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="">Phone</label>
                    <input type="number" name="phone" placeholder="No Telepon" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="">Address</label>
                    <input type="text" name="address" placeholder="Alamat" class="form-control">
                </div>
                <div class="mb-3">
                    <button class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
@endsection
