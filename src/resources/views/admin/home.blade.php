@extends('admin.layout')

@section('title', 'Home')

@section('content')

<section class="bg-no-repeat bg-gray-700 bg-blend-multiply"
    style="background-image: url('{{ asset('jumbotron.jpg') }}'); background-size: cover; height: 700px">
    <div class="px-4 mx-auto max-w-screen-xl text-center py-24 lg:py-56">
        <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-white md:text-5xl lg:text-6xl">
            WELCOME TO SENYUM SEHAT</h1>
        <p class="mb-8 text-lg font-normal text-gray-300 lg:text-xl sm:px-16 lg:px-48 uppercase tracking-[0.2em]">
            Penjadwalan konsultasi dan pengobatan gigi
        </p>
        <div class="flex flex-col space-y-4 sm:flex-row sm:justify-center sm:space-y-0">
            <a href="{{ route('admin.home') }}"
                class="inline-flex uppercase tracking-widest justify-center items-center py-3 px-5 text-base font-medium text-center text-white rounded-lg bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-blue-300 dark:focus:ring-blue-900">
                Welcome
            </a>
        </div>
    </div>

    <div class="flex gap-20 items-center justify-center w-full">
        <a href="{{ route('admin.jadwaldokter') }}"
            class="flex items-center gap-4 max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100">
            <img src="{{ asset('jadwal1.svg') }}" class="h-20 w-20">
            <h5 class="mb-2 text-2xl uppercase tracking-widest text-gray-900">Jadwal Dokter</h5>
        </a>
        <a href="{{ route('admin.pasien') }}"
            class="flex items-center gap-4 max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100">
            <img src="{{ asset('pasien.svg') }}" class="h-20 w-20">
            <h5 class="mb-2 text-2xl uppercase tracking-widest text-gray-900">Pasien</h5>
        </a>
        <a href="{{ route('admin.pengobatan') }}"
            class="flex items-center gap-4 max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100">
            <img src="{{ asset('jadwal2.svg') }}" class="h-20 w-20">
            <h5 class="mb-2 text-2xl uppercase tracking-widest text-gray-900">Penjadwalan</h5>
        </a>
    </div>
</section>

<section class="my-32">
    <div class="flex gap-10 justify-center">
        <div class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">Penjadwalan</h5>
            <p class="font-normal text-gray-700 dark:text-gray-400">Penjadwalan adalah pembagian waktu berdasarkan rencana pengaturan urutan kerja, daftar atau tabel kegiatan atau rencana kegiatan dengan pembagian waktu pelaksanaan yang terperinci.</p>
        </div>
        <div class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">Konsultasi</h5>
            <p class="font-normal text-gray-700 dark:text-gray-400">Konsultasi tidak ada rumusan resmi tentang pengertian konsultasi, namun konsultasi dapat diartikan sebagai sesuatu hal yang bersifat personal antara satu pihak (klien) dengan pihak lain yang lazim.</p>
        </div>
        <div class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">Pengobatan Gigi</h5>
            <p class="font-normal text-gray-700 dark:text-gray-400">Pengobatan gigi merupakan jenis pengobatan yang menggunakan alat, cara, dan bahan yang berkaitan dengan gigi.</p>
        </div>
    </div>
</section>

<!-- Section Our Team -->
<section class="py-20 bg-gradient-to-b from-blue-50 to-white">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-3xl sm:text-4xl font-bold text-gray-800 mb-4">OUR TEAM</h2>
            <div class="w-20 h-1.5 bg-indigo-600 mx-auto mb-4 rounded-full"></div>
            <p class="text-lg sm:text-xl text-gray-600 font-light">Tim Profesional di Balik Senyum Sehat</p>
        </div>
        
        <div class="flex flex-wrap justify-center gap-8 sm:gap-12 lg:gap-16 xl:gap-20">
            <!-- Author 1 -->
            <div class="w-full sm:w-auto px-4 mb-12 sm:mb-0">
                <div class="text-center max-w-xs mx-auto transform transition-all duration-300 hover:scale-105">
                    <div class="relative mb-4 mx-auto w-24 h-24">
                        <div class="w-full h-full rounded-full overflow-hidden border-4 border-white shadow-lg bg-gray-200">
                            <img src="{{ asset('images/lis.jpg') }}" alt="Author 1" class="w-full h-full object-cover object-center">
                        </div>
                    </div>
                    <h3 class="text-lg sm:text-xl font-bold text-gray-800 mb-1">Sarwalis</h3>
                    <p class="text-indigo-600 font-medium mb-2 text-sm">Lead Developer</p>
                    <p class="text-gray-600 text-xs sm:text-sm mb-4">Bertanggung jawab atas pengembangan sistem dan arsitektur aplikasi.</p>
                    <div class="flex justify-center gap-2">
                        <a href="#" class="w-8 h-8 rounded-full bg-white flex items-center justify-center shadow-md hover:bg-indigo-600 transition group">
                            <i class="fab fa-instagram text-indigo-600 text-xs group-hover:text-white"></i>
                        </a>
                        <a href="#" class="w-8 h-8 rounded-full bg-white flex items-center justify-center shadow-md hover:bg-green-500 transition group">
                            <i class="fab fa-whatsapp text-green-500 text-xs group-hover:text-white"></i>
                        </a>
                        <a href="#" class="w-8 h-8 rounded-full bg-white flex items-center justify-center shadow-md hover:bg-gray-800 transition group">
                            <i class="fab fa-github text-gray-800 text-xs group-hover:text-white"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Author 2 -->
            <div class="w-full sm:w-auto px-4">
                <div class="text-center max-w-xs mx-auto transform transition-all duration-300 hover:scale-105">
                    <div class="relative mb-4 mx-auto w-24 h-24">
                        <div class="w-full h-full rounded-full overflow-hidden border-4 border-white shadow-lg bg-gray-200">
                            <img src="{{ asset('images/lul.jpg') }}" alt="Author 2" class="w-full h-full object-cover object-center">
                        </div>
                    </div>
                    <h3 class="text-lg sm:text-xl font-bold text-gray-800 mb-1">Fazlul Fatani</h3>
                    <p class="text-indigo-600 font-medium mb-2 text-sm">Designer</p>
                    <p class="text-gray-600 text-xs sm:text-sm mb-4">Mendesain pengalaman pengguna yang optimal dan antarmuka yang intuitif.</p>
                    <div class="flex justify-center gap-2">
                        <a href="#" class="w-8 h-8 rounded-full bg-white flex items-center justify-center shadow-md hover:bg-indigo-600 transition group">
                            <i class="fab fa-instagram text-indigo-600 text-xs group-hover:text-white"></i>
                        </a>
                        <a href="#" class="w-8 h-8 rounded-full bg-white flex items-center justify-center shadow-md hover:bg-green-500 transition group">
                            <i class="fab fa-whatsapp text-green-500 text-xs group-hover:text-white"></i>
                        </a>
                        <a href="#" class="w-8 h-8 rounded-full bg-white flex items-center justify-center shadow-md hover:bg-gray-800 transition group">
                            <i class="fab fa-github text-gray-800 text-xs group-hover:text-white"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<!-- Footer -->
<footer class="bg-gray-800 py-12">
    <div class="container mx-auto px-4 text-center">
        <div class="flex justify-center mb-6">
            <img src="{{ asset('images/gigi.png') }}" alt="Senyum Sehat Logo" class="h-12">
        </div>
        <p class="mb-6 text-gray-300 text-lg">Senyum Sehat &copy; 2024 - Penjadwalan Konsultasi dan Pengobatan Gigi</p>
        <div class="flex justify-center gap-6 mb-6">
            <a href="#" class="w-10 h-10 rounded-full bg-gray-700 flex items-center justify-center hover:bg-indigo-600 transition">
                <i class="fab fa-instagram text-white text-lg"></i>
            </a>
            <a href="#" class="w-10 h-10 rounded-full bg-gray-700 flex items-center justify-center hover:bg-green-500 transition">
                <i class="fab fa-whatsapp text-white text-lg"></i>
            </a>
            <a href="#" class="w-10 h-10 rounded-full bg-gray-700 flex items-center justify-center hover:bg-gray-600 transition">
                <i class="fab fa-github text-white text-lg"></i>
            </a>
        </div>
        <p class="text-sm text-gray-400">Dibuat dengan <span class="text-red-500">❤</span> oleh Tim Senyum Sehat</p>
    </div>
</footer>

@endsection
