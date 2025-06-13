<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    // public function login(Request $request)
    // {
    //     // Validasi input
    //     $request->validate([
    //         'name' => 'required|string',
    //         'password' => 'required|string',
    //     ]);

    //     // Coba autentikasi pengguna
    //     $credentials = $request->only('name', 'password');

    //     if (Auth::attempt($credentials)) {
    //         // Autentikasi berhasil
    //         return redirect()->intended('admin/home');
    //     } else {
    //         // Autentikasi gagal
    //         return back()->withErrors([
    //             'name' => 'Nama atau sandi salah.',
    //         ]);
    //     }
    // }
    public function index()
    {
        return view('login');
    }
    
    public function registerPage()
    {
        return view('register');
    }
    
    public function login(Request $request)
    {
        // Validasi input
        $request->validate([
            'name' => 'required|string',
            'password' => 'required|string',
        ]);

        // Coba autentikasi pengguna
        $credentials = $request->only('name', 'password');

        if (Auth::attempt($credentials)) {
            // Autentikasi berhasil
            $user = Auth::user();

            // Cek role pengguna dan redirect sesuai role
            if ($user->role == 'admin') {
                return redirect()->intended('admin/home');
            } else {
                return redirect()->intended('user/home');
            }
        } else {
            // Autentikasi gagal
            return back()->with(
                'gagal' , 'username atau sandi salah.',
            );
        }
    }

    public function register(Request $request)
    {   
        // dd($request->name);
        $request->validate([
            'name' => 'required|string',
            'password' => 'required|string',
            'nik' => 'required|string',
            'alamat' => 'required|string',
            'no_hp' => 'required|string',
        ]);

        User::create([
            'name' => $request->name,
            'nik' => $request->nik,
            'alamat' => $request->alamat,
            'no_hp' => $request->no_hp,
            'password' => Hash::make($request->password),
        ]);
        
        return redirect('/')->with('berhasil', 'Anda berhasil daftar');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('home');
    }
}