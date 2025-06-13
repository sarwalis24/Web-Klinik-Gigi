@extends('admin.layout')

@section('title', 'Jadwal Dokter')

@section('content')

<section class="my-10 mx-20">
    <h1 class="text-3xl font-bold text-center mb-8">Data Jadwal Dokter</h1>
    <div class="mx-auto w-96 p-2 flex items-center justify-center">
        <form action="{{ route('admin.jadwaldokter.edit', $jadwal->id) }}" method="POST">
            @csrf
            <div class="mb-4 flex items-center gap-3">
                <label class=" text-gray-700 uppercase text-sm font-bold mb-2 w-52">Nama Dokter</label>
                <input type="text" name="nama" value="{{ $jadwal->nama }}"
                    class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500">
                    <button type="submit"><img src="{{ asset('save.svg') }}" class="h-10 w-10"></button>
            </div>
            <div class="mb-4 flex items-center gap-3">
                <label class=" text-gray-700 uppercase text-sm font-bold mb-2 w-52">Hari</label>
                <input type="text" name="hari" value="{{ $jadwal->hari }}"
                    class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500">
            </div>
            <div class="mb-4 flex items-center gap-3">
                <label class=" text-gray-700 uppercase text-sm font-bold mb-2 w-52">Jam</label>
                <input type="text" name="jam" value="{{ $jadwal->jam }}"
                    class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500">
            </div>
        </form>
    </div>
</section>

@endsection