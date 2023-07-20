<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Kriteria;
use App\Models\Produk;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function index()
    {
        $kriterias = Kriteria::orderBy('id', 'asc')->get();
        $produks = Produk::orderBy('id', 'desc')->get();
        $alternatif = ['A1', 'A2', 'A3', 'A4', 'A5', 'A6'];

        return view('admin.produk.index', compact('kriterias', 'produks', 'alternatif'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $kriterias = Kriteria::orderBy('id', 'asc')->get();

        return view('admin.produk.create', compact('kriterias'));
    }

    public function store(Request $request)
    {
        $validator = $request->validate([
            'nama' => 'required',
            'C1' => 'required',
            'C2' => 'required',
            'C3' => 'required',
            'C4' => 'required',
            'C5' => 'required',
            'kriteria_id' => 'nullable|integer',
        ]);

        $produk = Produk::create($validator);

        return redirect()->route('produk.index')->with('success', 'Data Produk Berhasil Di Tambah');
    }

    public function edit(string $id)
    {
        $p = Produk::find($id);
        $kriterias = Kriteria::orderBy('id', 'asc')->get();

        return view('admin.produk.edit', compact('p', 'kriterias'));
    }

    public function update(Request $request, string $id)
    {
        $validator = $request->validate([
            'nama' => 'required',
            'C1' => 'required',
            'C2' => 'required',
            'C3' => 'required',
            'C4' => 'required',
            'C5' => 'required',
            'kriteria_id' => 'nullable|integer',
        ]);

        $produk = Produk::find($id)->update($validator);

        return redirect()->route('produk.index')->with('success', 'Data Produk Berhasil Di Update');
    }

    public function destroy(string $id)
    {
        $produk = Produk::find($id)->delete();

        return redirect()->route('produk.index')->with('success', 'Data Produk Berhasil Di Hapus');
    }
}
