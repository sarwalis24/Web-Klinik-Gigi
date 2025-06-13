<?php

namespace App\Http\Controllers;

use App\Models\Jadwal;
use Illuminate\Http\Request;

class JadwalController extends Controller
{
    public function index()
    {   
        $jadwal = Jadwal::all();
        $no = 1;
        return view('admin.jadwal-dokter', compact('jadwal', 'no'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string',
            'hari1' => 'required|string',
            'hari2' => 'required|string',
            'jam1' => 'required|string',
            'jam2' => 'required|string',
        ]);

        $hari = $request->hari1.' sd '.$request->hari2;
        $jam = $request->jam1.' sd '.$request->jam2;

        $jadwal = new Jadwal;
        $jadwal->nama = $request->input('nama');
        $jadwal->hari = $hari;
        $jadwal->jam = $jam;
        $jadwal->save();

        return redirect('/admin/jadwal-dokter');
    }

    public function destroy($id)
    {
        $jadwal = Jadwal::find($id);
        $jadwal->delete();
        return redirect('/admin/jadwal-dokter');
    }

    public function show($id)
    {
        $jadwal = Jadwal::find($id);
        return view('admin.jadwal-dokter-edit', compact('jadwal'));
    }

    public function edit(Request $request, $id)
    {
        // Validasi input
        $request->validate([
            'nama' => 'required|string|max:255',
            'hari' => 'required|string|max:50',
            'jam' => 'required|string|max:50',
        ]);

        // Cari jadwal dokter berdasarkan ID
        $jadwal = Jadwal::findOrFail($id);

        // Update data jadwal dokter
        $jadwal->nama = $request->input('nama');
        $jadwal->hari = $request->input('hari');
        $jadwal->jam = $request->input('jam');
        
        // Simpan perubahan ke database
        $jadwal->save();

        // Redirect ke halaman sebelumnya dengan pesan sukses
        return redirect('/admin/jadwal-dokter')->with('success', 'Jadwal dokter berhasil diperbarui!');
    }
}