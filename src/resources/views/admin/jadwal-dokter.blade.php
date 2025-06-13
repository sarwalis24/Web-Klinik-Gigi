@extends('admin.layout')

@section('title', 'Jadwal Dokter')

@section('content')

<section class="my-10 mx-20">
    <h1 class="text-3xl font-bold text-center mb-8">Data Jadwal Dokter</h1>
    <div class="overflow-x-auto">
        <form action="{{ route('admin.jadwaldokter.store') }}" method="POST">
            @csrf
            <div class="flex gap-2 items-center py-2 px-4">
                <input type="text" name="nama" placeholder="Nama Dokter" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500">
                <input type="text" name="hari1" placeholder="Hari" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500">
                <span>sd</span>
                <input type="text" name="hari2" placeholder="Hari" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500">
                <input type="time" name="jam1" placeholder="Jam" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500">
                <span>sd</span>
                <input type="time" name="jam2" placeholder="Jam" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500">
                <button type="submit" class="bg-red-500"><img src="{{ asset('save.svg') }}" class="w-[200px]"></button>
            </div>
        </form>
        <table class="min-w-full bg-white border border-gray-200">
            <thead class="bg-black">
                <tr>
                    <th class="py-3 px-4 border-b border-gray-200 text-left text-sm font-semibold text-white">ID</th>
                    <th class="py-3 px-4 border-b border-gray-200 text-left text-sm font-semibold text-white">Nama Dokter</th>
                    <th class="py-3 px-4 border-b border-gray-200 text-left text-sm font-semibold text-white">Hari</th>
                    <th class="py-3 px-4 border-b border-gray-200 text-left text-sm font-semibold text-white">Jam</th>
                    <th class="py-3 px-4 border-b border-gray-200 text-left text-sm font-semibold text-white">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <!-- Row 1 -->
                @foreach ($jadwal as $item)
                <tr class="hover:bg-gray-50">
                    
                    <td class="py-3 px-4 border-b border-gray-200 text-sm text-gray-700">{{ $no++}}</td>
                    <td class="py-3 px-4 border-b border-gray-200 text-sm text-gray-700">{{ $item->nama }}</td>
                    <td class="py-3 px-4 border-b border-gray-200 text-sm text-gray-700">{{ $item->hari }}</td>
                    <td class="py-3 px-4 border-b border-gray-200 text-sm text-gray-700">{{ $item->jam }}</td>
                    <td class="py-3 px-4 border-b border-gray-200 text-sm flex gap-6">
                        <a href="{{ route('admin.jadwaldokter.show', $item->id) }}"><img src="{{ asset('save.svg') }}" class="h-8 w-8"></a>
                        <a href="{{ route('admin.jadwaldokter.delete', $item->id) }}"><img src="{{ asset('delete.svg') }}" class="h-8 w-8"></a>
                    </td>
                </tr>
                    @endforeach
            </tbody>
        </table>
    </div>
</section>

@endsection