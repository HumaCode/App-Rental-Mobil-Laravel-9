<?php

namespace App\Http\Controllers;

use App\Models\BrandMobil;
use App\Models\Mobil;
use App\Models\Setting;
use App\Models\Testimoni;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        if ($request->filled('q')) {
            $models = Mobil::where('merek_id', 'like', '%' . $request->q . '%')->get();
        } else {
            $models = Mobil::orderBy('id', 'desc')->take(3)->get();
        }

        $data = [
            "title"         => "Home",
            "daftarmobil"   => $models,
            "brandMobil"    => BrandMobil::get(),
            "testimoni"     => Testimoni::orderBy('id', 'desc')->take(9)->get(),
            "setting"       => Setting::find(1),
        ];
        return view("user.home", $data);
    }   //
}
