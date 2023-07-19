<?php

namespace App\Http\Controllers;

use App\Models\Layanan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LayananController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $layanan = Layanan::all();
        return view('show_layanan', compact('user', 'layanan'));
    }
}
