<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Kriteria;
use Illuminate\Http\Request;

class KriteriaController extends Controller
{
    public function index()
    {
        $kriterias = Kriteria::orderBy('id', 'asc')->get();

        return view('admin.kriteria.index', compact('kriterias'));
    }

    public function create()
    {
        return view('admin.kriteria.create');
    }

    public function store(Request $request)
    {
        $validator = $request->validate([
            'kode' => 'required',
            'nama' => 'required',
            'bobot' => 'required',
            'jenis' => 'required',
            'keterangan' => 'required',
        ]);

        $kriteria = Kriteria::create($validator);

        return redirect()->route('kriteria.index')->with('success', 'Data Kriteria Berhasil Di Tambah');
    }

    public function edit(string $id)
    {
        $k = Kriteria::find($id);

        return view('admin.kriteria.edit', compact('k'));
    }

    public function update(Request $request, string $id)
    {
        $validator = $request->validate([
            'kode' => 'required',
            'nama' => 'required',
            'bobot' => 'required',
        ]);

        $kriteria = Kriteria::find($id)->update($validator);

        return redirect()->route('kriteria.index')->with('success', 'Data Kriteria Berhasil Di Update');
    }

    public function destroy(string $id)
    {
        $kriteria = Kriteria::find($id)->delete();

        return redirect()->route('kriteria.index')->with('success', 'Data Kriteria Berhasil Di Hapus');
    }
}
