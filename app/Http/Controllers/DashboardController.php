<?php

namespace App\Http\Controllers;

use App\Models\Komentar;
use App\Models\Pekerjaan;
use App\Models\RiwayatLamaran;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function show_data()
    {
        $komentar = Komentar::all();
        $riwayat = RiwayatLamaran::with(['pelamar'])->get();

        foreach ($riwayat as $riwayatItem) {
            $pelamar = $riwayatItem->pelamar;
            $idLowongan = $pelamar->id_lowongan;

            // $pekerjaanItem = Pekerjaan::find($idLowongan);
            $pekerjaan = Pekerjaan::where('id', $idLowongan)->first();
            // if ($pekerjaanItem) {
            //     $pekerjaan[] = $pekerjaanItem;
            // }
        }
        return view('dashboard', compact('komentar', 'riwayat', 'pekerjaan'));;
    }

    public function owner()
    {
        return view('owner');
    }
}
