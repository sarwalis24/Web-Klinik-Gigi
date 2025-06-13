@extends('admin.layout')

@section('title', 'Pasien')

@section('content')

<section class="my-10 mx-20">
    <h1 class="text-3xl font-bold text-center mb-8">Data Pasien</h1>
    <div class="overflow-x-auto">
        <form action="{{ route('admin.pasien.store') }}" method="POST">
            @csrf
            <div class="flex gap-2 items-center py-2 px-4">
                <input type="number" name="nik" placeholder="NIK"
                    class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500">
                <input type="text" name="name" placeholder="Nama"
                    class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500">
                <input type="text" name="alamat" placeholder="Alamat"
                    class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500">
                <input type="number" name="no_hp" placeholder="No. Handphone"
                    class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500">
                <input type="password" name="password" placeholder="Sandi"
                    class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500">
                <button type="submit" class="bg-red-500"><img src="{{ asset('save.svg') }}" class="w-[200px]"></button>
            </div>
        </form>
        <table class="min-w-full bg-white border border-gray-200">
            <thead class="bg-black">
                <tr>
                    <th class="py-3 px-4 border-b border-gray-200 text-left text-sm font-semibold text-white">NIK</th>
                    <th class="py-3 px-4 border-b border-gray-200 text-left text-sm font-semibold text-white">Nama</th>
                    <th class="py-3 px-4 border-b border-gray-200 text-left text-sm font-semibold text-white">Alamat</th>
                    <th class="py-3 px-4 border-b border-gray-200 text-left text-sm font-semibold text-white">No Handphone</th>
                    <th class="py-3 px-4 border-b border-gray-200 text-left text-sm font-semibold text-white">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <!-- Row 1 -->
                @foreach ($pasien as $item)
                <tr class="hover:bg-gray-50">

                    <td class="py-3 px-4 border-b border-gray-200 text-sm text-gray-700">{{ $item->nik }}</td>
                    <td class="py-3 px-4 border-b border-gray-200 text-sm text-gray-700">{{ $item->name }}</td>
                    <td class="py-3 px-4 border-b border-gray-200 text-sm text-gray-700">{{ $item->alamat }}</td>
                    <td class="py-3 px-4 border-b border-gray-200 text-sm text-gray-700">{{ $item->no_hp }}</td>
                    <td class="py-3 px-4 border-b border-gray-200 text-sm flex gap-6">
                        <a href="{{ route('admin.pasien.show', $item->id) }}"><img src="{{ asset('save.svg') }}" class="h-8 w-8"></a>
                        <a href="{{ route('admin.pasien.delete', $item->id) }}"><img
                                src="{{ asset('delete.svg') }}" class="h-8 w-8"></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</section>

@endsection