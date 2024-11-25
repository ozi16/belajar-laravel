<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LatihanController extends Controller
{
    //method/ functio : kebisaan
    // visibilisasi : public, private(tidak mengeksekusi diluar kelasny), static(tidak mengeksekusi diluar kelasny)
    public function index()
    {
        return "Hallo";
    }

    public function edit($id)
    {
        return "ini adalah form edit dengan nama paramas:" . $id;
    }

    public function delete($id)
    {
        return "ini adalah form hapus dengan nama parameter:" . $id;
    }
}
