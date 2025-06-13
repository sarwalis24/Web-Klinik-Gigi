@extends('admin.layout')

@section('title', 'Jadwal Pengobatan')

@section('content')

    <section class="my-10 mx-20">
        <h1 class="text-3xl font-bold text-center mb-8">Data Penjadwalan Pengobatan Gigi</h1>
        <div class="flex justify-start py-2 px-4 gap-2">
            <form action="{{ route('admin.pengobatan.filter') }}" method="GET" class="flex gap-4">
                @csrf
                <div>
                    <input type="date" id="set_date" name="set_date" class="px-3 py-2 border rounded-lg">
                </div>
                <div class="flex items-end">
                    <button type="submit" class="bg-gray-500 text-white px-4 py-2 rounded-lg">Set</button>
                </div>
                <div class="flex items-end">
                    <a href="#" onclick="submitCetakForm()" class="bg-gray-500 text-white px-4 py-2 rounded-lg">Cetak</a>
                </div>
            </form>
        </div>
        <script>
            function submitCetakForm() {
                const date = document.getElementById('set_date').value;
                const url = date ? `{{ url('admin/cetakpdf') }}?set_date=${date}` : `{{ url('admin/cetakpdf') }}`;
                window.open(url, '_blank');
            }
        </script>
        <div class="overflow-x-auto">
            <form action="{{ route('admin.pengobatan.store') }}" method="POST">
                @csrf
                <div class="flex gap-2 items-center py-2 px-4">
                    <input type="date" name="tanggal" placeholder="tanggal"
                        class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500">
                    <select name="nama"
                        class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500">
                        <option disabled>Pilih Pasien</option>
                        @foreach ($nama as $namas)
                            <option value="{{ $namas->nik }}-{{ $namas->name }}">{{ $namas->nik }}-{{ $namas->name }}
                            </option>
                        @endforeach
                    </select>
                    <input type="time" name="jam" placeholder="Jam"
                        class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500">
                    <select name="jenis_pengobatan_gigi"
                        class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500">
                        <option disabled>Pilih Jenis Pengobatan</option>
                        <option value="Pasang Behel">Pasang Behel</option>
                        <option value="Bersihin Karang">Bersihkan Karang</option>
                        <option value="Kontrol Behel">Kontrol Behel</option>
                        <option value="Konsultasi">Konsultasi</option>
                        <option value="Cabut Gigi">Cabut Gigi</option>
                        <option value="Cabut Gigi">Tambal Gigi</option>
                        <option value="Cabut Gigi">Tambah Gigi Palsu</option>
                    </select>
                    <button type="submit"><img src="{{ asset('save.svg') }}" class="w-[200px]"></button>
                </div>
            </form>
            <table class="min-w-full bg-white border border-gray-200">
                <thead class="bg-black">
                    <tr>
                        <th class="py-3 px-4 border-b border-gray-200 text-left text-sm font-semibold text-white">ID</th>
                        <th class="py-3 px-4 border-b border-gray-200 text-left text-sm font-semibold text-white">Tanggal
                            Pengobatan</th>
                        <th class="py-3 px-4 border-b border-gray-200 text-left text-sm font-semibold text-white">Nama
                            Pasien</th>
                        <th class="py-3 px-4 border-b border-gray-200 text-left text-sm font-semibold text-white">Jam</th>
                        <th class="py-3 px-4 border-b border-gray-200 text-left text-sm font-semibold text-white">Jenis
                            Pengobatan</th>
                        <th class="py-3 px-4 border-b border-gray-200 text-left text-sm font-semibold text-white">Status
                        </th>
                        <th class="py-3 px-4 border-b border-gray-200 text-left text-sm font-semibold text-white">Aksi
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Row 1 -->
                    @foreach ($pengobatan as $item)
                        <tr class="hover:bg-gray-50">

                            <td class="py-3 px-4 border-b border-gray-200 text-sm text-gray-700">{{ $no++ }}</td>
                            <td class="py-3 px-4 border-b border-gray-200 text-sm text-gray-700">{{ $item->tanggal }}</td>
                            <td class="py-3 px-4 border-b border-gray-200 text-sm text-gray-700">{{ $item->nama }}</td>
                            <td class="py-3 px-4 border-b border-gray-200 text-sm text-gray-700">{{ $item->jam }}</td>
                            <td class="py-3 px-4 border-b border-gray-200 text-sm text-gray-700">
                                {{ $item->jenis_pengobatan_gigi }}</td>
                            <td class="py-3 px-4 border-b border-gray-200 text-sm text-gray-700">{{ $item->status }}</td>
                            <td class="py-3 px-4 border-b border-gray-200 text-sm flex gap-6">
                                <a href="{{ route('admin.pengobatan.show', $item->id) }}"><img
                                        src="{{ asset('save.svg') }}" class="h-8 w-8"></a>
                                <a href="{{ route('admin.pengobatan.delete', $item->id) }}"><img
                                        src="{{ asset('delete.svg') }}" class="h-8 w-8"></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </section>

@endsection
