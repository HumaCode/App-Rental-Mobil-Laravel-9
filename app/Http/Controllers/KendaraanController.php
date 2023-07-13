<?php

namespace App\Http\Controllers;

use App\Models\BrandMobil;
use App\Models\Mobil;
use App\Models\Motor;
use App\Models\Setting;
use Illuminate\Http\Request;

class KendaraanController extends Controller
{
    public function index(Request $request)
    {
        if ($request->filled('q')) {
            $models = Mobil::where('merek_id', 'like', '%' . $request->q . '%')->get();
        } else {
            $models = Mobil::orderBy('id', 'desc')->get();
        }

        $data = [
            "title" => "Kendaraan",
            "daftarmobil"   => $models,
            "brandMobil"    => BrandMobil::get(),
            "daftarmotor"   => Motor::orderBy('id', 'desc')->get(),
            "setting" => Setting::find(1),
        ];
        return view("user.kendaraan", $data);
    }   //
}
