@extends('layout.app');
@section('content')
    <div class="card">
        <h3 class="card-header">Edit Data Pengguna</h3>
        <div class="card-body">
            <form action="{{ route('user.update', $user->id) }} " method="POST">
                @csrf
                @method('put')
                <div class="mb-3">
                    <label for="">Nama</label>
                    <input type="text" name="name" value="{{ $user->name }}" placeholder="Nama" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="">Email</label>
                    <input type="email" class="form-control" name="email" value="{{ $user->email }}"
                        placeholder="Email">
                </div>
                <div class="mb-3">
                    <label for="">Password</label>
                    <input type="password" name="password" placeholder="password" class="form-control">
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
@endsection
