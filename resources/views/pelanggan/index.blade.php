@extends('layout.app');
@section('content')
    <div class="card">
        <h3 class="card-header">{{ $title ?? '' }}</h3>
        <div class="card-body">
            <div class="" align='right'>
                <a href="{{ route('customer.create') }}" class="btn btn-primary mb-2">Tambah</a>
            </div>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Customer</th>
                        <th>Phone</th>
                        <th>Alamat</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($customers as $key => $val)
                        <tr>
                            <td>{{ $key + 1 }}</td>
                            <td>{{ $val->customer_name }}</td>
                            <td>{{ $val->phone }}</td>
                            <td>{{ $val->address }}</td>
                            <td>
                                <a href="{{ route('customer.edit', $val->id) }}" class="btn btn-icon btn-secondary">
                                    <i class="tf-icons bx bx-pencil bx-22px"></i>
                                </a>
                                <form method="POST" action="{{ route('customer.destroy', $val->id) }}" class="d-inline">
                                    @method('delete')
                                    @csrf
                                    <button class="btn btn-icon btn-danger">
                                        <i class="tf-icons bx bx-trash bx-22px"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
