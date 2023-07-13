<?php

namespace App\Http\Controllers;

use App\Models\BrandMobil;
use App\Models\Mobil;
use App\Models\Motor;
use App\Models\Setting;
use App\Models\Testimoni;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        if ($request->filled('q')) {
            $models = Mobil::where('merek_id', 'like', '%' . $request->q . '%')->get();
        } else {
            $models = Mobil::orderBy('id', 'desc')->take(6)->get();
        }

        $data = [
            "title"         => "Home",
            "daftarmobil"   => $models,
            "daftarmotor"   => Motor::orderBy('id', 'desc')->get(),
            "brandMobil"    => BrandMobil::get(),
            "testimoni"     => Testimoni::orderBy('id', 'desc')->take(6)->get(),
            "setting"       => Setting::find(1),
        ];
        return view("user.home", $data);
    }   //
}
