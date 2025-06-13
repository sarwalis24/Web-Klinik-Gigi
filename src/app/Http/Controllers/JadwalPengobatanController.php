<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\JadwalPengobatan;
use Barryvdh\DomPDF\Facade\Pdf as Pdf;
use Carbon\Carbon;

class JadwalPengobatanController extends Controller
{
    public function index()
    {
        $nama = User::where('role', '!=', 'admin')->get();
        $pengobatan = JadwalPengobatan::all();
        $no = 1;
        return view('admin.pengobatan', compact('pengobatan', 'nama', 'no'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string',
            'tanggal' => 'required|string',
            'jam' => 'required|string',
            'jenis_pengobatan_gigi' => 'required|string',
        ]);

        $pengobatan = new JadwalPengobatan;
        $pengobatan->nama = $request->input('nama');
        $pengobatan->tanggal = $request->input('tanggal');
        $pengobatan->jam = $request->input('jam');
        $pengobatan->jenis_pengobatan_gigi = $request->input('jenis_pengobatan_gigi');
        $pengobatan->status = 'Sedang Diproses';
        $pengobatan->save();

        return redirect('/admin/pengobatan');
    }

    public function destroy($id)
    {
        $pengobatan = JadwalPengobatan::find($id);
        if ($pengobatan) {
            $pengobatan->delete();
            return redirect('/admin/pengobatan');
        } else {
            return redirect('/admin/pengobatan');
        }
    }

    public function show($id)
    {
        $pengobatan = JadwalPengobatan::find($id);
        return view('admin.pengobatan-edit', compact('pengobatan'));
    }

    public function edit(Request $request, $id)
    {
        // dd($id);
        $request->validate([
            'nama' => 'required|string',
            'tanggal' => 'required|date',
            'jam' => 'required|string',
            'jenis_pengobatan_gigi' => 'required|string',
            'status' => 'required|in:Sedang Diproses,Diterima,Ditolak(Pilih Jadwal Lain)',
        ]);

        $pengobatan = JadwalPengobatan::findOrFail($id);
        $pengobatan->nama = $request->input('nama');
        $pengobatan->tanggal = $request->input('tanggal');
        $pengobatan->jam = $request->input('jam');
        $pengobatan->jenis_pengobatan_gigi = $request->input('jenis_pengobatan_gigi');
        $pengobatan->status = $request->input('status');
        $pengobatan->update();
        return redirect('/admin/pengobatan');
    }

    public function filter(Request $request)
    {
        $setDate = $request->input('set_date');
        $nama = User::where('role', '!=', 'admin')->get();
        $pengobatan = JadwalPengobatan::where('tanggal', [$setDate])->get();
        $no = 1;
        return view('admin.pengobatan', compact('pengobatan', 'nama', 'no'));
    }

    public function cetakpdf(Request $request)
    {
        $query = JadwalPengobatan::query();

        if ($request->has('set_date') && !empty($request->set_date)) {
            $query->whereDate('tanggal', $request->set_date);
        }

        $pengobatan = $query->get();
        $currentDate = Carbon::now()->locale('id')->isoFormat('D MMMM YYYY');
        $no =1;

        $pdf = PDF::loadView('admin.pengobatanpdf', compact('pengobatan', 'no', 'currentDate'))->setPaper('a4', 'landscape');
        return $pdf->stream('laporan-penjadwalan-pengobatan-gigi.pdf');

        // $pengobatan = JadwalPengobatan::all();
        // $no =1;
        // $currentDate = Carbon::now()->locale('id')->isoFormat('D MMMM YYYY');
        // $pdf = Pdf::loadView('admin.pengobatanpdf', compact('pengobatan', 'no', 'currentDate'));
        // return $pdf->stream('pengobatan_gigi.pdf');
    }
}