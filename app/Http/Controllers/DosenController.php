<?php
namespace App\Http\Controllers;

use App\Models\Dosen;
use Illuminate\Http\Request;

class DosenController extends Controller {
    public function index() {
        $dosens = Dosen::all();
        return view('dosen.index', compact('dosens'));
    }

    public function create() {
        return view('dosen.create');
    }

    public function store(Request $request) {
        $request->validate([
            'nama' => 'required',
            'nidn' => 'required|unique:dosens',
        ]);
        Dosen::create($request->all());
        return redirect()->route('dosen.index')->with('success', 'Data Dosen berhasil ditambah');
    }

    public function edit($id) {
        $dosen = Dosen::findOrFail($id);
        return view('dosen.edit', compact('dosen'));
    }

    public function update(Request $request, $id) {
        $dosen = Dosen::findOrFail($id);
        $dosen->update($request->all());
        return redirect()->route('dosen.index');
    }

    public function destroy($id) {
        Dosen::destroy($id);
        return redirect()->route('dosen.index');
    }
}