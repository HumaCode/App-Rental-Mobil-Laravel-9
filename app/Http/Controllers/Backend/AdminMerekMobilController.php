<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\BrandMobil;
use Illuminate\Http\Request;

class AdminMerekMobilController extends Controller
{
    public function index()
    {
        $data = [
            'merek' => BrandMobil::orderBy('id', 'desc')->get(),
        ];

        return view('backend.merek_mobil', $data);
    }

    public function create()
    {
        return view('backend.tambah_merek_mobil');
    }

    public function store(Request $request)
    {
        $request->validate([
            'merek'  => 'required',
        ], [
            'merek.required'     => 'Merek mobil tidak boleh kosong..!!',
        ]);

        $brand           = new BrandMobil();
        $brand->merek    = $request->merek;
        $brand->save();

        $notification = array(
            'message'       => 'Merek mobil berhasil ditambah',
            'alert-type'    => 'success',
        );

        return redirect()->route('merek')->with($notification);
    }

    public function edit($id)
    {
        $brand       = BrandMobil::findOrFail($id);

        return view('backend.edit_merek_mobil', compact('brand'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'merek'  => 'required',
        ], [
            'merek.required'     => 'Merek mobil tidak boleh kosong..!!',
        ]);

        $brand           =  BrandMobil::findOrFail($id);
        $brand->merek    = $request->merek;
        $brand->save();

        $notification = array(
            'message'       => 'Merek mobil berhasil diubah',
            'alert-type'    => 'success',
        );

        return redirect()->route('merek')->with($notification);
    }

    public function hapus($id)
    {

        $brand = BrandMobil::find($id);

        if ($brand->mobil()->count() > 0) {

            $notification = array(
                'message'       => 'Merek Mobil tidak dapat di hapus, karena sedang di gunakan di tabel lain',
                'alert-type'    => 'error',
            );

            return redirect()->back()->with($notification);
        }

        BrandMobil::find($id)->delete();

        $notification = array(
            'message'       => 'Data berhasil dihapus',
            'alert-type'    => 'success',
        );

        return redirect()->back()->with($notification);
    }
}
