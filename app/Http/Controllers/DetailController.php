<?php

namespace App\Http\Controllers;

use App\Models\Mobil;
use App\Models\Setting;
use Illuminate\Http\Request;

class DetailController extends Controller
{
    public function index($slug)
    {
        $data = [
            "title" => "Detail Mobil",
            'mobilDetail' => Mobil::where('slug', $slug)->first(),
            "setting" => Setting::find(1),
        ];
        return view("user.detailmobil", $data);
    }   //
}
