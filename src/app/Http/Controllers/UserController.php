<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Jadwal;
use Illuminate\Http\Request;
use App\Models\JadwalPengobatan;

class UserController extends Controller
{
    public function index()
    {
        return view('user.home');
    }
    public function jadwaldokter()
    {   
        $jadwal = Jadwal::all();
        $no = 1;
        return view('user.jadwaldokter', compact('jadwal', 'no'));
    }
    public function pengobatan()
    {   
        $pengobatan = JadwalPengobatan::all();
        return view('user.pengobatan', compact('pengobatan'));
    }

    public function pengobatanstore(Request $request)
    {
        $request->validate([
            'tanggal' => 'required|string',
            'jam' => 'required|string',
            'jenis_pengobatan_gigi' => 'required|string',
        ]);

        $pengobatan = new JadwalPengobatan;
        $pengobatan->nama = User::find(Auth()->user()->id)->name;
        $pengobatan->tanggal = $request->input('tanggal');
        $pengobatan->jam = $request->input('jam');
        $pengobatan->jenis_pengobatan_gigi = $request->input('jenis_pengobatan_gigi');
        $pengobatan->status = 'Sedang Diproses';
        $pengobatan->save();

        return redirect('/user/pengobatan');
    }
}