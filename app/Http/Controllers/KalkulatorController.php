<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KalkulatorController extends Controller
{
    public function index()
    {
        return view('kalkulator.index');
    }

    public function tambah()
    {
        $title = "form Tambah";
        $jumlah = 0;
        return view('kalkulator.tambah', compact('title', 'jumlah',));
    }

    public function storeTambah(Request $request)
    {
        $angka1 = $request->angka1;
        $angka2 = $request->angka2;
        $jumlah = $angka1 + $angka2;
        $title = "Hasil dari " . $angka1 . " + " . $angka2 . " adalah : " . $jumlah;
        return view('kalkulator.tambah', compact('title', 'jumlah'));
    }

    public function kurang()
    {
        $title = "Form Kurang";
        $jumlah = 0;
        return view('kalkulator.kurang', compact('title', 'jumlah'));
    }

    public function storeKurang(Request $request)
    {
        $angka1 = $request->angka1;
        $angka2 = $request->angka2;
        $jumlah = $angka1 - $angka2;
        $title = "Hasil dari " . $angka1 . " - " . $angka2 . " adalah : " . $jumlah;
        return view('kalkulator.kurang', compact('title', 'jumlah'));
    }

    public function kali()
    {
        $title = "Form Kali";
        $jumlah = 0;
        return view('kalkulator.kali', compact('title', 'jumlah'));
    }

    public function storeKali(Request $request)
    {
        $angka1 = $request->angka1;
        $angka2 = $request->angka2;
        $jumlah = $angka1 * $angka2;
        $title = "Hasil dari " . $angka1 . " x " . $angka2 . " adalah : " . $jumlah;
        return view('kalkulator.kali', compact('title', 'jumlah'));
    }
    public function bagi()
    {
        $title = "Form bagi";
        $jumlah = 0;
        return view('kalkulator.bagi', compact('title', 'jumlah'));
    }

    public function storeBagi(Request $request)
    {
        $angka1 = $request->angka1;
        $angka2 = $request->angka2;
        $jumlah = $angka1 / $angka2;
        $title = "Hasil dari " . $angka1 . " / " . $angka2 . " adalah : " . $jumlah;
        return view('kalkulator.bagi', compact('title', 'jumlah'));
    }
}
