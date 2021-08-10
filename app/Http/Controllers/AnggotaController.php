<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AnggotaController extends Controller
{
    public function tampil()
    {
        $user = Auth::user();
        return view('anggota.profil', compact('user'));
    }
}
