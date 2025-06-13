@extends('user.layout')

@section('title', 'Jadwal Pengobatan')

@section('content')
     
<section class="my-10 mx-20">
    <h1 class="text-3xl font-bold text-center mb-8">Data Jadwal Pengobatan</h1>
    <div class="mx-auto w-96 p-2 flex items-center justify-center">
        <form action="{{ route('user.pengobatan.store') }}" method="POST">
            @csrf
            <div class="mb-4 flex items-center gap-3">
                <label class=" text-gray-700 uppercase text-sm font-bold mb-2 w-52">Tanggal</label>
                <input type="date" name="tanggal"
                    class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500">
                <button type="submit"><img src="{{ asset('save.svg') }}" class="h-10 w-10"></button>
            </div>
            <div class="mb-4 flex items-center gap-3">
                <label class=" text-gray-700 uppercase text-sm font-bold mb-2 w-52">Jam</label>
                <input type="time" name="jam" 
                    class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500">
            </div>
            <div class="mb-4 flex items-center gap-3">
                <label class=" text-gray-700 uppercase text-sm font-bold mb-2 w-52">Jenis Pengobatan Gigi</label>
                <select name="jenis_pengobatan_gigi" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500">
                    <option disabled>Pilih Jenis Pengobatan</option>
                        <option value="Pasang Behel">Pasang Behel</option>
                        <option value="Bersihin Karang">Bersihkan Karang</option>
                        <option value="Kontrol Behel">Kontrol Behel</option>
                        <option value="Konsultasi">Konsultasi</option>
                        <option value="Cabut Gigi">Cabut Gigi</option>
                        <option value="Cabut Gigi">Tambal Gigi</option>
                        <option value="Cabut Gigi">Tambah Gigi Palsu</option>
                </select>
            </div>
        </form>
    </div>
    <div class="overflow-x-auto">
        <table class="min-w-full bg-white border border-gray-200">
            <thead class="bg-black">
                <tr>
                    <th class="py-3 px-4 border-b border-gray-200 text-left text-sm font-semibold text-white">Tanggal Pengobatan</th>
                    <th class="py-3 px-4 border-b border-gray-200 text-left text-sm font-semibold text-white">Nama Pasien</th>
                    <th class="py-3 px-4 border-b border-gray-200 text-left text-sm font-semibold text-white">Jam</th>
                    <th class="py-3 px-4 border-b border-gray-200 text-left text-sm font-semibold text-white">Jenis Pengobatan</th>
                    <th class="py-3 px-4 border-b border-gray-200 text-left text-sm font-semibold text-white">Status</th>
                </tr>
            </thead>
            <tbody>
                <!-- Row 1 -->
                @foreach ($pengobatan as $item)
                <tr class="hover:bg-gray-50">
                    
                    <td class="py-3 px-4 border-b border-gray-200 text-sm text-gray-700">{{ $item->tanggal }}</td>
                    <td class="py-3 px-4 border-b border-gray-200 text-sm text-gray-700">{{ $item->nama }}</td>
                    <td class="py-3 px-4 border-b border-gray-200 text-sm text-gray-700">{{ $item->jam }}</td>
                    <td class="py-3 px-4 border-b border-gray-200 text-sm text-gray-700">{{ $item->jenis_pengobatan_gigi }}</td>
                    <td class="py-3 px-4 border-b border-gray-200 text-sm text-gray-700">{{ $item->status }}</td>
                    
                </tr>
                    @endforeach
            </tbody>
        </table>
    </div>
</section>

    @endsection
