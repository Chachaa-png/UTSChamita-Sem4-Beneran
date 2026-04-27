<?php

namespace App\Http\Controllers;

use App\Models\MataKuliah;
use Illuminate\Http\Request;

class MataKuliahController extends Controller
{
    public function index()
    {
        $matakuliahs = MataKuliah::all();
        return view('matakuliah.index', compact('matakuliahs'));
    }

    public function create()
    {
        return view('matakuliah.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'kode_mk' => 'required|unique:mata_kuliahs',
            'nama_mk' => 'required',
            'sks' => 'required|numeric',
        ]);

        MataKuliah::create($request->all());

        return redirect()->route('matakuliah.index')->with('success', 'Mata Kuliah berhasil ditambah');
    }

    public function edit($id)
    {
        $mk = MataKuliah::findOrFail($id);
        return view('matakuliah.edit', compact('mk'));
    }

    public function update(Request $request, $id)
    {
        $mk = MataKuliah::findOrFail($id);
        $mk->update($request->all());

        return redirect()->route('matakuliah.index')->with('success', 'Mata Kuliah berhasil diupdate');
    }

    public function destroy($id)
    {
        MataKuliah::destroy($id);
        return redirect()->route('matakuliah.index')->with('success', 'Mata Kuliah berhasil dihapus');
    }
}