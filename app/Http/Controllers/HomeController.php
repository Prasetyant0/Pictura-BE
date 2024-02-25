<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
    // $welcomeUser = session('welcome_user');
    // $showModal = session('showModal');

    // Hapus session showModal agar modal hanya ditampilkan sekali
    // session()->forget('showModal');

    return view('Pages.Authorized.home');
    }

}
