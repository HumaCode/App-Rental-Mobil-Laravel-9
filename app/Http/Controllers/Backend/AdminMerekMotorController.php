<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\MerekMotor;
use Illuminate\Http\Request;

class AdminMerekMotorController extends Controller
{
    public function index()
    {
        $data = [
            'merek' => MerekMotor::orderBy('id', 'desc')->get(),
        ];

        return view('backend.merek_motor', $data);
    }

    public function create()
    {
        return view('backend.tambah_merek_motor');
    }

    public function store(Request $request)
    {
        $request->validate([
            'merek_motor'  => 'required',
        ], [
            'merek_motor.required'     => 'Merek motor tidak boleh kosong..!!',
        ]);

        $brand                  = new MerekMotor();
        $brand->merek_motor     = $request->merek_motor;
        $brand->save();

        $notification = array(
            'message'       => 'Merek motor berhasil ditambah',
            'alert-type'    => 'success',
        );

        return redirect()->route('merek_motor')->with($notification);
    }

    public function edit($id)
    {
        $brand       = MerekMotor::findOrFail($id);

        return view('backend.edit_merek_motor', compact('brand'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'merek_motor'  => 'required',
        ], [
            'merek_motor.required'     => 'Merek Motor tidak boleh kosong..!!',
        ]);

        $brand                  =  MerekMotor::findOrFail($id);
        $brand->merek_motor     = $request->merek_motor;
        $brand->save();

        $notification = array(
            'message'       => 'Merek motor berhasil diubah',
            'alert-type'    => 'success',
        );

        return redirect()->route('merek_motor')->with($notification);
    }

    public function hapus($id)
    {

        $brand = MerekMotor::find($id);

        if ($brand->motor()->count() > 0) {

            $notification = array(
                'message'       => 'Merek Mobil tidak dapat di hapus, karena sedang di gunakan di tabel lain',
                'alert-type'    => 'error',
            );

            return redirect()->back()->with($notification);
        }

        MerekMotor::find($id)->delete();

        $notification = array(
            'message'       => 'Data berhasil dihapus',
            'alert-type'    => 'success',
        );

        return redirect()->back()->with($notification);
    }
}
