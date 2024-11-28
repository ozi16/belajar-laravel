@extends('layout.app');
@section('content')
    <div class="card">
        <h3 class="card-header">{{ $title ?? '' }}</h3>
        <div class="card-body">
            <form action="{{ route('customer.update', $customer->id) }} " method="POST">
                @csrf
                @method('put')
                <div class="mb-3">
                    <label for="">Nama Paket</label>
                    <input type="text" name="customer_name" value="{{ $customer->customer_name }}" placeholder="Nama Paket"
                        class="form-control">
                </div>
                <div class="mb-3">
                    <label for="">Phone</label>
                    <input type="number" class="form-control" name="phone" value="{{ $customer->phone }}"
                        placeholder="Phone">
                </div>
                <div class="mb-3">
                    <label for="">Alamat</label>
                    <input type="text" name="address" placeholder="Alamat nye diaman" value="{{ $customer->address }}"
                        class="form-control">
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
@endsection
