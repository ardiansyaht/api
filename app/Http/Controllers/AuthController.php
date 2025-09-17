<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    // Register method (sudah ada sebelumnya)
    // Di dalam file app/Http/Controllers/AuthController.php

    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nama' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:8|confirmed',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 400);
        }

        User::create([
            'nama' => $request->nama,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return response()->json([
            'status' => 'success',
            'message' => 'Registrasi berhasil! Anda akan diarahkan ke halaman login.',
            'redirect_to' => route('login') // JavaScript akan menggunakan URL ini
        ], 201);
    }

    public function login(Request $request)
    {

        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required|string',
        ]);


        $remember = $request->has('remember');


        if (Auth::attempt($credentials, $remember)) {
            $request->session()->regenerate();


            return response()->json(['status' => 'success'], 200);
        }
        return response()->json([
            'error' => 'The provided credentials are incorrect.',
        ], 401);
    }
    public function logout(Request $request)
    {
        // Menghapus semua informasi autentikasi dari sesi pengguna
        Auth::logout();

        // Membatalkan sesi yang sedang berjalan
        $request->session()->invalidate();

        // Membuat ulang token CSRF untuk keamanan
        $request->session()->regenerateToken();

        // Mengarahkan pengguna ke halaman utama atau halaman login
        return redirect('/login');
    }

    public function loginForm()
    {
        return view('auth.login');
    }

    public function registerForm()
    {
        return view('auth.register');
    }
}
