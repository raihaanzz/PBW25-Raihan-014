<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    // Form Registrasi & Login (Simple View)
    public function index() {
        return view('auth.form');
    }

    // Menampilkan Halaman Login
    public function showLogin() {
        return view('auth.login', ["title" => "Login"]);
    }

    // Menampilkan Halaman Register
    public function showRegister() {
        return view('auth.register', ["title" => "Register"]);
    }

    // Logika Registrasi sekaligus Login
    public function register(Request $request) {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        // Otomatis Login setelah daftar
        Auth::login($user);

        // Redirect ke home dengan pesan sukses
        return redirect('/')->with('success', 'Registrasi berhasil! Selamat datang, ' . $user->name);
    }

    // Logika Login Biasa
    public function login(Request $request) {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            
            // Redirect ke home dengan pesan sukses
            return redirect('/')->with('success', 'Login berhasil! Selamat datang kembali, ' . Auth::user()->name);
        }

        return back()->withErrors(['email' => 'Email atau password salah.'])->withInput();
    }

    public function logout(Request $request) {
        $userName = Auth::user()->name;
        
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        
        return redirect('/')->with('success', 'Logout berhasil. Sampai jumpa lagi, ' . $userName . '!');
    }
}