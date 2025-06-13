@extends('admin.layout')

@section('title', 'Pasien')

@section('content')

    <section class="my-10 mx-20">
        <h1 class="text-3xl font-bold text-center mb-8">Data Pasien</h1>
        <div class="mx-auto w-96 p-2 flex items-center justify-center">
            @error('nik')
                <p class="text-red-500">{{ $message }}</p>
            @enderror
            <form action="{{ route('admin.pasien.edit', $pasien->id) }}" method="POST">
                @csrf
                <div class="mb-4 flex items-center gap-3">
                    <label class=" text-gray-700 uppercase text-sm font-bold mb-2 w-52">NIK</label>
                    <input type="number" name="nik" value="{{ $pasien->nik }}"
                        class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500">
                    <button type="submit"><img src="{{ asset('save.svg') }}" class="h-10 w-10"></button>
                </div>
                <div class="mb-4 flex items-center gap-3">
                    <label class=" text-gray-700 uppercase text-sm font-bold mb-2 w-52">Nama</label>
                    <input type="text" name="name" value="{{ $pasien->name }}"
                        class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500">
                </div>
                <div class="mb-4 flex items-center gap-3">
                    <label class=" text-gray-700 uppercase text-sm font-bold mb-2 w-52">Alamat</label>
                    <input type="text" name="alamat" value="{{ $pasien->alamat }}"
                        class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500">
                </div>
                <div class="mb-4 flex items-center gap-3">
                    <label class=" text-gray-700 uppercase text-sm font-bold mb-2 w-52">No. Handphone</label>
                    <input type="number" name="no_hp" value="{{ $pasien->no_hp }}"
                        class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500">
                </div>
            </form>
        </div>
    </section>

@endsection
