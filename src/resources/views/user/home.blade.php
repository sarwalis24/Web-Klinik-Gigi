@extends('user.layout')

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
                <p class="font-normal text-gray-700 dark:text-gray-400">pengobatan gigi merupakan jenis pengobatan yang menggunakan alat, cara, dan bahan yang berkaitan dengan gigi.</p>
            </div>
        </div>

    </section>

    @endsection
