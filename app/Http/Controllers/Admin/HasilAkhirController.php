<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HasilAkhirController extends Controller
{
    public function index()
    {
        return view('admin.hasil-akhir.index');
    }
}
