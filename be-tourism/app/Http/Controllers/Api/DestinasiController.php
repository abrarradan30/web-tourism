<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Destinasi;
use Illuminate\Http\Request;
use App\Http\Resources\DestinasiResource;

class DestinasiController extends Controller
{
    public function index()
    {
        $destinasi = Destinasi::latest()->get();
        return new DestinasiResource(true, 'List Data Destinasi', $destinasi);
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|max:255',
            'deskripsi' => 'required',
            'lokasi' => 'required|max:255',
            'gambar' => 'nullable|string',
            'kategori' => 'nullable|string|max:100',
            'status' => 'boolean',
        ]);

        $destinasi = Destinasi::create($request->all());

        return new DestinasiResource(true, 'Data Destinasi Berhasil Disimpan!', $destinasi);
    }

    public function show($id)
    {
        $destinasi = Destinasi::find($id);

        if ($destinasi) {
            return new DestinasiResource(true, 'Detail Data Destinasi', $destinasi);
        }

        return response()->json([
            'success' => false,
            'message' => 'Data Tidak Ditemukan',
        ], 404);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'sometimes|required|max:255',
            'deskripsi' => 'sometimes|required',
            'lokasi' => 'sometimes|required|max:255',
            'gambar' => 'nullable|string',
            'kategori' => 'nullable|string|max:100',
            'status' => 'required|boolean',
        ]);

        $destinasi = Destinasi::find($id);

        if (!$destinasi) {
            return response()->json([
                'success' => false,
                'message' => 'Data Tidak Ditemukan',
            ], 404);
        }

        $destinasi->update($request->all());

        return new DestinasiResource(true, 'Data Destinasi Berhasil Diupdate!', $destinasi);
    }

    public function destroy($id)
    {
        $destinasi = Destinasi::find($id);

        if (!$destinasi) {
            return response()->json([
                'success' => false,
                'message' => 'Data Tidak Ditemukan',
            ], 404);
        }

        $destinasi->delete();

        return response()->json([
            'success' => true,
            'message' => 'Data Destinasi Berhasil Dihapus!',
        ]);
    }
}
