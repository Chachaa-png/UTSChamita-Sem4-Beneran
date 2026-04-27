<?php

namespace App\Http\Controllers;

use App\Models\jurusan;
use Illuminate\Http\Request;

class JurusanController extends Controller
{
    public function index()
    {
        $jurusans = jurusan::all();
        return view('jurusan.index', compact('jurusans'));
    }

    public function create()
    {
        return view('jurusan.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'jurusan' => 'required',
            'kode_jurusan' => 'required',
        ]);

        $item = new jurusan;
        $item->jurusan = $request->jurusan;
        $item->{"kode jurusan"} = $request->kode_jurusan; 
        $item->save();

        return redirect()->route('jurusan.index')->with('success', 'Jurusan berhasil ditambah');
    }

    public function edit($id)
    {
        $jurusan = jurusan::findOrFail($id);
        return view('jurusan.edit', compact('jurusan'));
    }

    public function update(Request $request, $id)
    {
        $jurusan = jurusan::findOrFail($id);
        $jurusan->jurusan = $request->jurusan;
        $jurusan->{"kode jurusan"} = $request->kode_jurusan;
        $jurusan->save();

        return redirect()->route('jurusan.index')->with('success', 'Jurusan berhasil diupdate');
    }

    public function destroy($id)
    {
        $jurusan = jurusan::findOrFail($id);
        $jurusan->delete();
        return redirect()->route('jurusan.index')->with('success', 'Jurusan berhasil dihapus');
    }
}