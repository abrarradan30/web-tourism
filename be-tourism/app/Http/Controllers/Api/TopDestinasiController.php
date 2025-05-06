<?php

namespace App\Http\Controllers;

use App\Models\TopDestinasi;
use App\Models\Kategori;
use Illuminate\Http\Request;

class TopDestinasiController extends Controller
{
    // ✅ Ambil semua top destinasi
    public function index()
    {
        $data = TopDestinasi::with('kategori')->get();
        return response()->json($data);
    }

    // ✅ Simpan destinasi baru
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
            'kategori_id' => 'required|exists:kategori,id',
            'rating' => 'nullable|numeric|min:0|max:5',
            'gambar' => 'nullable|string', // atau bisa di-handle upload
        ]);

        $data = TopDestinasi::create($request->all());
        return response()->json($data, 201);
    }

    // ✅ Ambil detail satu destinasi
    public function show($id)
    {
        $data = TopDestinasi::with('kategori')->findOrFail($id);
        return response()->json($data);
    }

    // ✅ Update destinasi
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
            'kategori_id' => 'required|exists:kategori,id',
            'rating' => 'nullable|numeric|min:0|max:5',
            'gambar' => 'nullable|string',
        ]);

        $destinasi = TopDestinasi::findOrFail($id);
        $destinasi->update($request->all());

        return response()->json($destinasi);
    }

    // ✅ Hapus destinasi
    public function destroy($id)
    {
        $destinasi = TopDestinasi::findOrFail($id);
        $destinasi->delete();

        return response()->json(null, 204);
    }
}
