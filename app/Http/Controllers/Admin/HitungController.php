<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Kriteria;
use App\Models\Produk;
use Illuminate\Http\Request;

class HitungController extends Controller
{

    public function index()
    {
        return view('admin.waspas.hitung');
    }

    // public function index(Request $request)
    // {
    //     $kriteria = Kriteria::sum('bobot');

    //     $bobot1 = 2 / $kriteria;
    //     $bobot2 = 2 / $kriteria;
    //     $bobot3 = 1 / $kriteria;
    //     $bobot4 = 2 / $kriteria;
    //     $bobot5 = 3 / $kriteria;

    //     $widget1 = ['kriterias' => $bobot1];
    //     $widget2 = ['kriterias' => $bobot2];
    //     $widget3 = ['kriterias' => $bobot3];
    //     $widget4 = ['kriterias' => $bobot4];
    //     $widget5 = ['kriterias' => $bobot5];

    //     $produk = Produk::get();
    //     $data = Produk::orderBy('nama', 'ASC')->get();

    //     $minC1 = Produk::min('C1');
    //     $maxC1 = Produk::max('C1');
    //     $minC2 = Produk::min('C2');
    //     $maxC2 = Produk::max('C2');
    //     $minC3 = Produk::min('C3');
    //     $maxC3 = Produk::max('C3');
    //     $minC4 = Produk::min('C4');
    //     $maxC4 = Produk::max('C4');
    //     $minC5 = Produk::min('C5');
    //     $maxC5 = Produk::max('C5');
 
    //     $C1min = ['produks' => $minC1];
    //     $C1max = ['produks' => $maxC1];
    //     $C2min = ['produks' => $minC2];
    //     $C2max = ['produks' => $maxC2];
    //     $C3min = ['produks' => $minC3];
    //     $C3max = ['produks' => $maxC3];
    //     $C4min = ['produks' => $minC4];
    //     $C4max = ['produks' => $maxC4];
    //     $C5min = ['produks' => $minC5];
    //     $C5max = ['produks' => $maxC5];

    //     $hasil = $minC1 / $maxC1;
    //     $hasil1 = ['produks' => $hasil];

    //     return view('admin.waspas.hitung', compact('hasil1', 'data', 'widget1', 'widget2', 'widget3', 'widget4', 'widget5', 'C1min', 'C1max', 'C2min', 'C2max', 'C3min', 'C3max', 'C4min', 'C4max', 'C5min', 'C5max' ));

    // }
}
