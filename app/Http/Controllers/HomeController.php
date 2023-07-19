<?php

namespace App\Http\Controllers;

use App\Models\Pekerjaan;
use App\Models\RiwayatLamaran;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $riwayat = RiwayatLamaran::with(['pelamar'])->where('user_id', Auth::user()->id)->get();

        foreach ($riwayat as $riwayatItem) {
            $pelamar = $riwayatItem->pelamar;
            $idLowongan = $pelamar->id_lowongan;

            // $pekerjaanItem = Pekerjaan::find($idLowongan);
            $pekerjaan = Pekerjaan::where('id', $idLowongan)->first();
            // if ($pekerjaanItem) {
            //     $pekerjaan[] = $pekerjaanItem;
            // }
        }
        return view('home', compact('riwayat', 'pekerjaan'));
    }
}
