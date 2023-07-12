<?php

namespace App\Http\Controllers;

use App\Models\BrandMobil;
use App\Models\Mobil;
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
        ];
        return view("user.kendaraan", $data);
    }   //
}
