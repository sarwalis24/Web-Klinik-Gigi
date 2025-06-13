<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class PasienController extends Controller
{
    public function index()
    {   
        $pasien = User::where('role', '!=', 'admin')->get();
        return view('admin.pasien', compact('pasien'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nik' => 'required|string',
            'name' => 'required|string',
            'alamat' => 'required|string',
            'no_hp' => 'required|string',
            'password' => 'required|string',
        ]);

        $pasien = new User;
        $pasien->nik = $request->input('nik');
        $pasien->name = $request->input('name');
        $pasien->alamat = $request->input('alamat');
        $pasien->no_hp = $request->input('no_hp');
        $pasien->password = $request->input('password');
        $pasien->save();

        return redirect('/admin/pasien');
    }

    public function destroy($id)
    {
        $pasien = User::find($id);
        $pasien->delete();
        return redirect('/admin/pasien');
    }

    public function show($id)
    {
        $pasien = User::find($id);
        return view('admin.pasien-edit', compact('pasien'));
    }

    public function edit(Request $request, $id)
    {   
        // Validasi input
        $request->validate([
            'nik' => 'required|string|max:255',
            'name' => 'required|string|max:50',
            'alamat' => 'required|string|max:50',
            'no_hp' => 'required|string|max:50',
        ]);

        // Cari pasien berdasarkan ID
        $pasien = User::findOrFail($id);

        // Update data pasien
        $pasien->nik = $request->input('nik');
        $pasien->name = $request->input('name');
        $pasien->alamat = $request->input('alamat');
        $pasien->no_hp = $request->input('no_hp');
        
        // Simpan perubahan ke database
        $pasien->update();

        // Redirect ke halaman sebelumnya dengan pesan sukses
        return redirect('/admin/pasien');
    }
}