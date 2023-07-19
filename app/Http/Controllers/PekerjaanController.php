<?php

namespace App\Http\Controllers;

use App\Models\Dokumen;
use App\Models\Pekerjaan;
use App\Models\Pelamar;
use App\Models\RiwayatLamaran;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Redirect;


class PekerjaanController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $pekerjaan = Pekerjaan::all();
        return view('show_kerjaan', compact('user', 'pekerjaan'));
    }
    public function show_detail($id)
    {
        $user = Auth::user();
        $pekerjaan = Pekerjaan::with('category')->find($id);
        return view('detail_kerjaan', compact('id', 'pekerjaan','user'));
    }
    public function lamar_pekerjaan(Pekerjaan $id)
    {
        $user = Auth::user();
        return view('lamar_pekerjaan', compact('id', 'user'));
    }
    public function lamar(Request $request, Pekerjaan $id)
    {
        $zona_waktu = 'Asia/Jakarta';
        $now = Carbon::now()->setTimezone($zona_waktu);
        $pelamar = Pelamar::create([
            'id_lowongan' => $id->id,
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'no_telepon' => $request->nomor,
            'email' => $request->email,
            'waktu_daftar' => $now
        ]);

        $dokumen = new Dokumen();
        $dokumen->pelamar_id = $pelamar->id;
        $cv = $request->file('cv');
        $cv_input = time() . '_' . $request->name . '_cv' . '.' . $cv->getClientOriginalExtension();
        Storage::disk('local')->put('public/pelamar/cv/' . $cv_input, file_get_contents($cv));
        $ijazah = $request->file('ijazah');
        $ijazah_input = time() . '_' . $request->name . '_ijazah' . '.' . $ijazah->getClientOriginalExtension();
        Storage::disk('local')->put('public/pelamar/ijazah/' . $ijazah_input, file_get_contents($ijazah));
        $dokumen->cv_lamaran = $cv_input;
        $dokumen->ijazah = $ijazah_input;
        $dokumen->save();

        $riwayat = new RiwayatLamaran();
        $riwayat->user_id = Auth::user()->id;
        $riwayat->pelamar_id = $pelamar->id;
        $riwayat->save();

        return Redirect::route('home');
    }
}
