<?php

namespace App\Http\Controllers;

use App\Models\Mobil;
use App\Models\Motor;
use App\Models\Setting;
use Illuminate\Http\Request;

class DetailController extends Controller
{
    public function detailmobil($slug)
    {
        $data = [
            "title" => "Detail Mobil",
            'mobilDetail' => Mobil::where('slug', $slug)->first(),
            "setting" => Setting::find(1),
        ];
        return view("user.detailmobil", $data);
    }   //

    public function detailmotor($slug)
    {
        $data = [
            "title" => "Detail Motor",
            'motorDetail' => Motor::where('slug', $slug)->first(),
            "setting" => Setting::find(1),
        ];
        return view("user.detailmotor", $data);
    }   //
}
