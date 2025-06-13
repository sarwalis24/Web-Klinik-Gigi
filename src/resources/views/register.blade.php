<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-gray-100">

    <!-- Informasi di atas navbar -->
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
            <h1 class="text-2xl font-bold text-gray-700"><span class="text-green-500">Klinik Gigi</span> - SENYUM SEHAT</h1>
        </div>
    </nav>

    <!-- Halaman Login -->
    <div class="flex items-center justify-center mt-10">
        <div class="bg-white p-8 rounded-lg shadow-lg w-96">
            <h2 class="text-2xl font-bold mb-6 text-center text-gray-700">Silahkan Daftar</h2>
            <form action="{{ route('register') }}" method="POST">
                @csrf
                <div class="mb-4 flex items-center gap-3">
                    <label class=" text-gray-700 uppercase text-sm font-bold mb-2 w-20">NIK</label>
                    <input type="number" name="nik"
                        class="w-auto px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500">
                        <button type="submit"><img src="save.svg" class="h-10 w-10"></button>
                </div>
                <div class="mb-4 flex items-center gap-3">
                    <label class=" text-gray-700 uppercase text-sm font-bold mb-2 w-20">Nama</label>
                    <input type="text" name="name"
                        class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500">
                </div>
                <div class="mb-4 flex items-center gap-3">
                    <label class=" text-gray-700 uppercase text-sm font-bold mb-2 w-20">Alamat</label>
                    <input type="text" name="alamat"
                        class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500">
                </div>
                <div class="mb-4 flex items-center gap-3">
                    <label class=" text-gray-700 uppercase text-sm font-bold mb-2 w-20">No.HP</label>
                    <input type="number" name="no_hp"
                        class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500">
                </div>
                <div class="mb-6 flex items-center gap-3">
                    <label class="uppercase text-gray-700 text-sm font-bold mb-2 w-20">Sandi</label>
                    <input type="password" name="password"
                        class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500">
                </div>

                <div class="flex items-center gap-2">
                    <a href="/" type="submit"
                        class="uppercase bg-gray-300 px-4 py-2 rounded-lg hover:bg-green-500 focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-opacity-50">
                        Exit
                    </a>
                </div>
            </form>
        </div>
    </div>

</body>

</html>
