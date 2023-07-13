<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\MerekMotor;
use App\Models\Motor;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Cviebrock\EloquentSluggable\Services\SlugService;

class AdminMotorController extends Controller
{
    public function index()
    {
        $data = [
            'motor' => Motor::orderBy('id', 'desc')->get(),
        ];

        return view('backend.data_motor', $data);
    }

    public function create()
    {
        $merek = MerekMotor::get();

        return view('backend.tambah_motor', compact('merek'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_motor'        => 'required',
            'merek_motor_id'    => 'required',
            'tahun'             => 'required',
            'ket_lain'          => 'required',
            'gambar'            => 'required|image|mimes:png,jpg|max:5000',
        ], [
            'nama_motor.required'           => 'Nama motor tidak boleh kosong..!!',
            'merek_motor_id.required'       => 'Merek motor tidak boleh kosong..!!',
            'tahun.required'                => 'Tahun mobil tidak boleh kosong..!!',
            'ket_lain.required'             => 'Keterangan lain tidak boleh kosong..!!',
            'gambar.required'               => 'Gambar mobil tidak boleh kosong..!!',
            'gambar.image'                  => 'Yang anda upload bukan gambar..!!',
            'gambar.mimes'                  => 'Format gambar tidak valid..!!',
            'gambar.max'                    => 'Gambar terlalu besar, maks 5 MB..!!',
        ]);

        $data_motor = new Motor();

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
            Image::make($image)->resize(500, 360)->save('backend/uploads/motor/' . $name_gen);
            $data_motor->gambar    = 'backend/uploads/motor/' . $name_gen;
        }

        $data_motor->nama_motor       = $request->nama_motor;
        $data_motor->slug             = $request->slug;
        $data_motor->merek_motor_id   = $request->merek_motor_id;
        $data_motor->tahun            = $request->tahun;
        $data_motor->ket_lain         = $request->ket_lain;
        $data_motor->save();

        $notification = array(
            'message'       => 'Data motor berhasil ditambahkan',
            'alert-type'    => 'success',
        );

        return redirect()->route('motor')->with($notification);
    }

    public function edit($slug)
    {
        $data = [
            'dataMotor' => Motor::where('slug', $slug)->first(),
            'merek'     => MerekMotor::get(),
        ];

        return view('backend.edit_motor', $data);
    }

    public function update(Request $request, $slug)
    {
        $request->validate([
            'nama_motor'        => 'required',
            'merek_motor_id'    => 'required',
            'tahun'             => 'required',
            'ket_lain'          => 'required',
            'gambar'            => 'nullable|image|mimes:png,jpg|max:5000',
        ], [
            'nama_motor.required'           => 'Nama motor tidak boleh kosong..!!',
            'merek_motor_id.required'       => 'Merek motor tidak boleh kosong..!!',
            'ket_lain.required'             => 'Keterangan lain tidak boleh kosong..!!',
            'gambar.image'                  => 'Yang anda upload bukan gambar..!!',
            'gambar.mimes'                  => 'Format gambar tidak valid..!!',
            'gambar.max'                    => 'Gambar terlalu besar, maks 5 MB..!!',
        ]);

        $data_motor = Motor::where('slug', $slug)->first();

        if ($request->hasFile('gambar')) {

            if ($data_motor->gambar != null) {
                // Storage::delete($data_mobil->gambar);
                unlink($data_motor->gambar);
            }

            // $image      = $request->file('gambar');
            // // $name_gen   = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension(); × 
            // Image::make($image)->resize(390, 226);

            // $data_mobil->gambar = $request->file('gambar')->store('public/uploads/mobil');

            $image      = $request->file('gambar');
            $name_gen   = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(500, 360)->save('backend/uploads/motor/' . $name_gen);
            $data_motor->gambar    = 'backend/uploads/motor/' . $name_gen;
        }


        $data_motor->nama_motor       = $request->nama_motor;
        $data_motor->slug             = $request->slug;
        $data_motor->merek_motor_id   = $request->merek_motor_id;
        $data_motor->ket_lain         = $request->ket_lain;
        $data_motor->save();

        $notification = array(
            'message'       => 'Data motor berhasil diubah',
            'alert-type'    => 'success',
        );

        return redirect()->route('motor')->with($notification);
    }

    public function delete($slug)
    {
        $dataMotor = Motor::where('slug', $slug)->first();

        if ($dataMotor->gambar != null) {
            // Storage::delete($dataMotor->gambar);
            unlink($dataMotor->gambar);
        }

        $dataMotor->delete();


        $notification = array(
            'message'       => 'Data berhasil dihapus',
            'alert-type'    => 'success',
        );

        return redirect()->back()->with($notification);
    }

    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(Motor::class, 'slug', $request->nama_motor);

        return response()->json(['slug' => $slug]);
    }
}
