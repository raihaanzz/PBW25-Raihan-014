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

        return redirect()->intended('/dashboard');
    }

    // Logika Login Biasa
    public function login(Request $request) {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/dashboard');
        }

        return back()->withErrors(['email' => 'Email atau password salah.']);
    }

    public function logout(Request $request) {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}