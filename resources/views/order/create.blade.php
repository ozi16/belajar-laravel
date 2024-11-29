@extends('layout.app');
@section('content')
    <div class="card">
        <h3 class="card-header">{{ $title ?? '' }}</h3>
        <div class="card-body">
            <form action="{{ route('trans_order.store') }} " method="POST">
                @csrf
                <div class="row">
                    <div class="col-sm-6">
                        <div class="mb-3">
                            <label for="">Kode Transaksi</label>
                            <input type="text" name="order_code" placeholder="Kode Transaksi" class="form-control"
                                value="{{ $order_code ?? '' }}" readonly>
                        </div>
                        <div class="mb-3">
                            <label for="">Tanggal Laundry</label>
                            <input type="date" name="order_date" placeholder="" class="form-control"
                                value="{{ $order_date ?? '' }}">
                        </div>
                        <div class="mb-3">
                            <label for="">Paket</label>
                            <select name="" id="id_paket" class="form-control">
                                <option value="">--Pilih Paket--</option>
                                @foreach ($services as $service)
                                    <option value="{{ $service->id }}">{{ $service->service_name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <input type="hidden" id="price">
                    </div>
                    <div class="col-sm-6">
                        <div class="mb-3">
                            <label for="">Nama Customer</label>
                            <select name="id_customer" id="" class="form-control">
                                <option value="">--Pilih Customer--</option>
                                @foreach ($customers as $cus)
                                    <option value="{{ $cus->id }}">{{ $cus->customer_name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="">Tanggal pengembalian</label>
                            <input type="date" name="order_end" placeholder="" class="form-control"
                                value="{{ $order_end ?? '' }}">
                        </div>
                        <div class="mb-3">
                            <label for="">Qty (kg)</label>
                            <input type="number" class="qty form-control" placeholder="masukan qty">
                        </div>
                    </div>
                </div>
                {{-- membuat button untuk menambahkan table ketika di click --}}
                <div class="mb-3" align='right'>
                    <button class="btn btn-secondary add-row">Tambah Baris</button>
                </div>
                <div class="table-responsive mt-3 mb-3">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Nama paket</th>
                                <th>Harga</th>
                                <th>Qty</th>
                                <th>SubTotal</th>
                            </tr>
                        </thead>
                        <tbody class="tbody-parent">
                            <tr>
                                {{-- <td></td>
                                <td></td>
                                <td></td>
                                <td></td> --}}
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                                <td colspan="3"></td>
                                <td>
                                    <input type="number" name="total_price" class="total-harga form-control" readonly>
                                    <input type="hidden" name="order_status" value="0">
                                </td>
                            </tr>
                        </tfoot>
                    </table>
                </div>

                <div class="mb-3">
                    <button class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
@endsection
