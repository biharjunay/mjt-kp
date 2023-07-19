<?php

namespace App\Http\Controllers;

use App\Models\KategoriPekerjaan;
use App\Models\Layanan;

use App\Models\Pekerjaan;
use App\Models\Portfolio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;

class CustomController extends Controller
{
    public function index()
    {
        $layanan = Layanan::all();
        $portfolio = Portfolio::all();
        $pekerjaan = KategoriPekerjaan::all();
        $lowongan = Pekerjaan::all();
        return view('custom_page', compact('layanan', 'portfolio', 'pekerjaan', 'lowongan'));
    }
    public function create_service()
    {
        return view('create_service');
    }
    public function store_service(Request $request)
    {
        Layanan::create([
            'layanan' => $request->layanan,
            'deskripsi' => $request->deskripsi,
        ]);
        return Redirect::route('custom.index');
    }
    public function edit_service(Layanan $item)
    {
        return view('edit_service', compact('item'));
    }
    public function update_service(Request $request, Layanan $item)
    {
        $item->update([
            'layanan' => $request->layanan,
            'deskripsi' => $request->deskripsi
        ]);
        return Redirect::route('custom.index');
    }
    public function delete_service(Layanan $item)
    {
        $item->delete();
        return Redirect::route('custom.index');
    }
    public function input_portfolio()
    {
        return view('create_portfolio');
    }
    public function create_portfolio(Request $request)
    {
        $file = $request->file('file');
        $nama = $request->name;
        $image = time() . '_' . $request->name . '.' . $file->getClientOriginalExtension();
        Storage::disk('local')->put('public/' . $image, file_get_contents($file));
        Portfolio::create([
            'name' => $nama,
            'image' => $image
        ]);
        return Redirect::route('custom.index');
    }
    public function edit_portfolio(Portfolio $portfolios)
    {
        return view('edit_portfolio', compact('portfolios'));
    }
    public function update_portfolio(Request $request, Portfolio $portfolios)
    {
        Storage::delete('public/' . $portfolios->image);
        $file = $request->file('file');
        $image = time() . '_' . $request->name . '.' . $file->getClientOriginalExtension();
        Storage::disk('local')->put('public/' . $image, file_get_contents($file));
        $portfolios->update([
            'name' => $request->name,
            'image' => $image
        ]);
        return Redirect::route('custom.index');
    }
    public function delete_portfolio(Portfolio $portfolios)
    {
        Storage::delete('public/' . $portfolios->image);
        $portfolios->delete();
        return Redirect::route('custom.index');
    }
    public function get_kerjaan($id)
    {
        $data = Pekerjaan::where('kategori', $id)->get();
        return response()->json($data);
    }
    public function get_semua_kerjaan()
    {
        $data = Pekerjaan::all();
        return response()->json($data);
    }
    public function create_kerjaan()
    {
        $pekerjaan = KategoriPekerjaan::all();
        return view('create_kerjaan', compact('pekerjaan'));
    }
    public function store_kerjaan(Request $request)
    {
        $file = $request->file('file');
        $judul = $request->judul;
        $url = time() . '_' . $judul . '.' . $file->getClientOriginalExtension();
        Storage::disk('local')->put('public/pekerjaan/' . $url, file_get_contents($file));
        Pekerjaan::create([
            'kategori' => $request->kategori,
            'judul' => $judul,
            'deskripsi' => $request->deskripsi,
            'gambar' => $url,
            'kualifikasi' => $request->kualifikasi

        ]);
        return Redirect::route('custom.index');
    }
    public function edit_kerjaan(Pekerjaan $id)
    {
        $pekerjaan = KategoriPekerjaan::all();
        return view('edit_kerjaan', compact('id', 'pekerjaan'));
    }
    public function update_kerjaan(Request $request, Pekerjaan $id)
    {
        Storage::delete('public/pekerjaan/' . $id->gambar);
        $file = $request->file('file');
        $judul = $request->judul;
        $url = time() . '_' . $judul . '.' . $file->getClientOriginalExtension();
        Storage::disk('local')->put('public/pekerjaan/' . $url, file_get_contents($file));
        $id->update([
            'kategori' => $request->kategori,
            'judul' => $judul,
            'deskripsi' => $request->deskripsi,
            'gambar' => $url,
            'kualifikasi' => $request->kualifikasi
        ]);
        return Redirect::route('custom.index');
    }
    public function delete_kerjaan(Pekerjaan $id)
    {
        Storage::delete('public/pekerjaan/' . $id->gambar);
        $id->delete();
        return Redirect::route('custom.index');
    }
}
