<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\BrandMobil;
use App\Models\Mobil;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Support\Str;


class AdminMobilController extends Controller
{
    public function index()
    {
        $data = [
            'mobil' => Mobil::orderBy('id', 'desc')->get(),
        ];

        return view('backend.data_mobil', $data);
    }

    public function create()
    {
        $merek = BrandMobil::get();

        return view('backend.tambah_mobil', compact('merek'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_mobil'    => 'required',
            'merek'         => 'required',
            'tahun'         => 'required',
            'jml_kursi'     => 'required',
            'jenis_bbm'     => 'required',
            'ket_lain'      => 'required',
            'harga_sewa'    => 'required',
            'gambar'        => 'required|image|mimes:png,jpg|max:5000',
        ], [
            'nama_mobil.required'           => 'Nama mobil tidak boleh kosong..!!',
            'merek.required'                => 'Merek mobil tidak boleh kosong..!!',
            'tahun.required'                => 'Tahun mobil tidak boleh kosong..!!',
            'jml_kursi.required'            => 'Jumlah kursi tidak boleh kosong..!!',
            'jenis_bbm.required'            => 'Jenis bbm tidak boleh kosong..!!',
            'ket_lain.required'             => 'Keterangan lain tidak boleh kosong..!!',
            'harga_sewa.required'           => 'Harga sewa tidak boleh kosong..!!',
            'gambar.required'               => 'Gambar mobil tidak boleh kosong..!!',
            'gambar.image'                    => 'Yang anda upload bukan gambar..!!',
            'gambar.mimes'                    => 'Format gambar tidak valid..!!',
            'gambar.max'                      => 'Gambar terlalu besar, maks 5 MB..!!',
        ]);

        $data_mobil = new Mobil();

        if ($request->hasFile('gambar')) {

            // if ($setting->logo != null) {
            //     Storage::delete($setting->logo);
            // }

            // $image      = $request->file('gambar');
            // $name_gen   = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
            // Image::make($image)->resize(500, 400);

            // $data_mobil->gambar = $request->file('gambar')->store('public/uploads/mobil');


            $image      = $request->file('gambar');
            $name_gen   = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(500, 360)->save('backend/uploads/mobil/' . $name_gen);
            $data_mobil->gambar    = 'backend/uploads/mobil/' . $name_gen;
        }

        $data_mobil->nama_mobil       = $request->nama_mobil;
        $data_mobil->slug             = $request->slug;
        $data_mobil->merek            = $request->merek;
        $data_mobil->tahun            = $request->tahun;
        $data_mobil->jml_kursi        = $request->jml_kursi;
        $data_mobil->jenis_bbm        = $request->jenis_bbm;
        $data_mobil->ket_lain         = $request->ket_lain;
        $data_mobil->harga_sewa       = $request->harga_sewa;
        $data_mobil->status           = 1;
        $data_mobil->save();

        $notification = array(
            'message'       => 'Data mobil berhasil ditambahkan',
            'alert-type'    => 'success',
        );

        return redirect()->route('mobil')->with($notification);
    }

    public function edit($slug)
    {
        $data = [
            'dataMobil' => Mobil::where('slug', $slug)->first(),
        ];

        return view('backend.edit_mobil', $data);
    }

    public function update(Request $request, $slug)
    {
        $request->validate([
            'nama_mobil'    => 'required',
            'merek'         => 'required',
            'tahun'         => 'required',
            'jml_kursi'     => 'required',
            'jenis_bbm'     => 'required',
            'ket_lain'      => 'required',
            'harga_sewa'    => 'required',
            'gambar'        => 'nullable|image|mimes:png,jpg|max:5000',
        ], [
            'nama_mobil.required'           => 'Nama mobil tidak boleh kosong..!!',
            'merek.required'                => 'Merek mobil tidak boleh kosong..!!',
            'tahun.required'                => 'Tahun mobil tidak boleh kosong..!!',
            'jml_kursi.required'            => 'Jumlah kursi tidak boleh kosong..!!',
            'jenis_bbm.required'            => 'Jenis bbm tidak boleh kosong..!!',
            'ket_lain.required'             => 'Keterangan lain tidak boleh kosong..!!',
            'harga_sewa.required'           => 'Harga sewa tidak boleh kosong..!!',
            'gambar.image'                  => 'Yang anda upload bukan gambar..!!',
            'gambar.mimes'                  => 'Format gambar tidak valid..!!',
            'gambar.max'                    => 'Gambar terlalu besar, maks 5 MB..!!',
        ]);

        $data_mobil = Mobil::where('slug', $slug)->first();

        if ($request->hasFile('gambar')) {

            if ($data_mobil->gambar != null) {
                // Storage::delete($data_mobil->gambar);
                unlink($data_mobil->gambar);
            }

            // $image      = $request->file('gambar');
            // // $name_gen   = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension(); × 
            // Image::make($image)->resize(390, 226);

            // $data_mobil->gambar = $request->file('gambar')->store('public/uploads/mobil');

            $image      = $request->file('gambar');
            $name_gen   = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(500, 360)->save('backend/uploads/mobil/' . $name_gen);
            $data_mobil->gambar    = 'backend/uploads/mobil/' . $name_gen;
        }
        if ($request->status != null) {
            $stts = 1;
        } else {
            $stts = 0;
        }

        $data_mobil->nama_mobil       = $request->nama_mobil;
        $data_mobil->slug             = $request->slug;
        $data_mobil->merek            = $request->merek;
        $data_mobil->tahun            = $request->tahun;
        $data_mobil->jml_kursi        = $request->jml_kursi;
        $data_mobil->jenis_bbm        = $request->jenis_bbm;
        $data_mobil->ket_lain         = $request->ket_lain;
        $data_mobil->harga_sewa       = $request->harga_sewa;
        $data_mobil->status           = $stts;
        $data_mobil->save();

        $notification = array(
            'message'       => 'Data mobil berhasil diubah',
            'alert-type'    => 'success',
        );

        return redirect()->route('mobil')->with($notification);
    }

    public function delete($slug)
    {
        $dataMobil = Mobil::where('slug', $slug)->first();

        if ($dataMobil->status == '0') {
            $notification = array(
                'message'       => 'Tidak dapat menghapus data',
                'alert-type'    => 'error',
            );

            return redirect()->back()->with($notification);
        }

        if ($dataMobil->gambar != null) {
            // Storage::delete($dataMobil->gambar);
            unlink($dataMobil->gambar);
        }

        $dataMobil->delete();


        $notification = array(
            'message'       => 'Data berhasil dihapus',
            'alert-type'    => 'success',
        );

        return redirect()->back()->with($notification);
    }

    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(Mobil::class, 'slug', $request->nama_mobil);

        return response()->json(['slug' => $slug]);
    }
}
