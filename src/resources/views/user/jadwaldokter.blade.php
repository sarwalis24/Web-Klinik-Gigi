@extends('user.layout')

@section('title', 'Jadwal Dokter')

@section('content')
     
<section class="my-10 mx-20">
    <h1 class="text-3xl font-bold text-center mb-8">Data Jadwal Dokter</h1>
    <div class="overflow-x-auto">
        <table class="min-w-full bg-white border border-gray-200">
            <thead class="bg-black">
                <tr>
                    <th class="py-3 px-4 border-b border-gray-200 text-left text-sm font-semibold text-white">ID</th>
                    <th class="py-3 px-4 border-b border-gray-200 text-left text-sm font-semibold text-white">Nama Dokter</th>
                    <th class="py-3 px-4 border-b border-gray-200 text-left text-sm font-semibold text-white">Hari</th>
                    <th class="py-3 px-4 border-b border-gray-200 text-left text-sm font-semibold text-white">Jam</th>
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
                    
                </tr>
                    @endforeach
            </tbody>
        </table>
    </div>
</section>

    @endsection
