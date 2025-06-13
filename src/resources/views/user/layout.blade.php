<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-gray-100">
    <div class="bg-white">
        <div class="container mx-auto flex justify-between items-center px-4">
            <div class="text-sm flex gap-6 p-2">
                <div class="flex">
                    <x-heroicon-s-phone class="h-4 w-4 text-green-500" />
                    <p>+62 821-6000-8258</p>
                </div>
                <span>|</span>
                <div class="flex">
                    <x-heroicon-s-envelope class="h-4 w-4 text-green-500" />
                    <p>spesialisgigi@gmail.com</p>
                </div>
            </div>
            <div class="flex space-x-4 text-sm">
                <a href="#" class="hover:text-gray-300"><x-css-facebook class="h-4 w-4 text-gray-500" /></a>
                <a href="#" class="hover:text-gray-300"><x-css-twitter class="h-4 w-4 text-gray-500" /></a>
                <a href="#" class="hover:text-gray-300"><x-css-instagram class="h-4 w-4 text-gray-500" /></a>
            </div>
        </div>
    </div>
    <!-- Navbar -->
    <nav class="bg-white shadow-lg">
        <div class="container mx-auto px-4 py-4 flex justify-between items-center">
            <h1 class="text-2xl font-bold text-gray-700"><span class="text-green-500">Klinik Gigi</span> - SENYUM
                SEHAT</h1>
            <ul class="flex space-x-8 text-md">
                <li><a href="{{ route('user.home') }}" class="text-gray-700 hover:text-green-500">Home</a></li>
                <li><a href="{{ route('user.jadwaldokter') }}" class="text-gray-700 hover:text-green-500">Jadwal
                        Dokter</a></li>
                <li><a href="{{ route('user.pengobatan') }}"
                        class="text-gray-700 hover:text-green-500">Penjadwalan</a></li>
                <li><a href="/logout" class="text-green-500">EXIT</a></li>
            </ul>
        </div>
    </nav>
    @yield('content')

</body>

</html>
