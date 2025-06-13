@extends('admin.layout')

@section('title', 'Jadwal Pengobatan')

@section('content')

    <section class="my-10 mx-20">
        <h1 class="text-3xl font-bold text-center mb-8">Data Penjadwalan Pengobatan Gigi</h1>
        <div class="mx-auto w-96 p-2 flex items-center justify-center">
            <form action="{{ route('admin.pengobatan.edit', $pengobatan->id) }}" method="POST">
                @csrf
                <div class="mb-4 flex items-center gap-3">
                    <label class=" text-gray-700 uppercase text-sm font-bold mb-2 w-52">Tanggal</label>
                    <input type="date" name="tanggal" value="{{ $pengobatan->tanggal }}"
                        class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500">
                    <button type="submit"><img src="{{ asset('save.svg') }}" class="h-10 w-10"></button>
                </div>
                <div class="mb-4 flex items-center gap-3">
                    <label class=" text-gray-700 uppercase text-sm font-bold mb-2 w-52">Nama</label>
                    <input type="text" name="nama" value="{{ $pengobatan->nama }}"
                        class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500">
                </div>
                <div class="mb-4 flex items-center gap-3">
                    <label class=" text-gray-700 uppercase text-sm font-bold mb-2 w-52">Jam</label>
                    <input type="time" name="jam" value="{{ $pengobatan->jam }}"
                        class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500">
                </div>
                <div class="mb-4 flex items-center gap-3">
                    <label class=" text-gray-700 uppercase text-sm font-bold mb-2 w-52">Jenis Pengobatan</label>
                    <input type="text" name="jenis_pengobatan_gigi" value="{{ $pengobatan->jenis_pengobatan_gigi }}"
                        class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500">
                </div>
                <div class="mb-4 flex items-center gap-3">
                    <label class="text-gray-700 uppercase text-sm font-bold mb-2 w-52">Status</label>
                    <select name="status"
                        class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500">
                        <option value="Sedang Diproses" {{ $pengobatan->status == 'Sedang Diproses' ? 'selected' : '' }}>
                            Sedang Diproses</option>
                        <option value="Diterima" {{ $pengobatan->status == 'Diterima' ? 'selected' : '' }}>Diterima</option>
                        <option value="Ditolak(Pilih Jadwal Lain)"
                            {{ $pengobatan->status == 'Ditolak(Pilih Jadwal Lain)' ? 'selected' : '' }}>Ditolak(Pilih Jadwal
                            Lain)</option>
                    </select>
                </div>
            </form>
        </div>
    </section>

@endsection
