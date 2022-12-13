<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LaporanController extends Controller
{
    public function index()
    {
        $data = array('tittle' => 'Form laporan penjualan');
        return view('laporan.index', $data);
    }
    public function proses()
    {
        $data = array('tittle' => 'Laporan Penjualan');
        return view('laporan.proses', $data);
    }
}
