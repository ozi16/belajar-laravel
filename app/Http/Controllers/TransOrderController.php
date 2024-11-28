<?php

namespace App\Http\Controllers;


use App\Models\Customer;
use App\Models\Order;
use App\Models\Service;
use Faker\Guesser\Name;
use Illuminate\Http\Request;

use RealRashid\SweetAlert\Facades\Alert;

class TransOrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //select * from users
        $orders = Order::with('customer')->get();
        $title = 'Data Transaksi';

        return view('order.index', compact('orders', 'title'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = 'Tambah Order';
        $order = Order::get()->last();
        $id_order = $order->id ?? '';
        $id_order++;
        $order_code = "L" . date('dmY') . sprintf("%03s", $id_order); // untuk membuat kode order
        $customers = Customer::get(); // untuk mengambil dan menampilkan data customer
        $services = Service::get(); // untuk mengambil dan menampilkan data service
        return view('order.create', compact('title', 'order_code', 'customers', 'services'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Order::create($request->all());
        // User::create([
        //     'name' => $request->name,
        //     'email' => $request->email,
        //     'password' => Hash::make($request->password),
        // ]);
        Alert::success('Berhasil di Tambahkan', 'Selamt join.. GK MENERIMA NGUTANG YEEE');
        return redirect()->to('order');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $title = 'Edit Customer';
        $customer = Customer::find($id);
        return view('pelanggan.edit', compact('title', 'customer'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $customer = Customer::find($id);
        $customer->customer_name = $request->customer_name;
        $customer->phone = $request->phone;
        $customer->address = $request->address;
        $customer->save();
        Alert::success('Berhasil di Ubah', 'Selamt join.. GK MENERIMA NGUTANG YEEE');
        return redirect()->to('customer');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $customer = Customer::find($id)->delete();
        Alert::success('Berhasil di Hapus', 'Bae2 Dehh... ');
        return redirect()->to('customer');
    }

    public function delete($id)
    {
        $customer = Customer::find($id)->delete();
        return redirect()->to('customer');
    }
}
