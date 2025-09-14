<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    /**
     * Menampilkan halaman dashboard.
     */
    public function index()
    {
        // Mengambil data pengguna yang sedang terautentikasi
        $user = Auth::user();

        // Mengirim data pengguna ke view 'dashboard'
        return view('dashboard', ['user' => $user]);
    }
}
