<?php

namespace App\Http\Controllers;

use App\Models\Komentar;
use App\Models\Layanan;
use App\Models\Pekerjaan;
use App\Models\Portfolio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class BerandaController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $layanan = Layanan::all();
        $komentar = Komentar::all();
        $portfolio = Portfolio::all();
        $pekerjaan = Pekerjaan::with(['category'])->get();
        return view('index', compact('user', 'layanan', 'komentar', 'portfolio', 'pekerjaan'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'no_telepon' => 'required|min:10',
            'email' => 'required|email',
            'komentar' => 'required',
        ]);

        Komentar::create([
            'nama' => $request->nama,
            'no_telepon' => $request->no_telepon,
            'email' => $request->email,
            'komentar' => $request->komentar
        ]);
        $request->session()->flash('success', 'Komentar berhasil dikirim');
        return Redirect::route('index');
    }
}
