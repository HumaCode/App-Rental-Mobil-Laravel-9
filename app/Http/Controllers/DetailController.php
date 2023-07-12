<?php

namespace App\Http\Controllers;

use App\Models\Mobil;
use Illuminate\Http\Request;

class DetailController extends Controller
{
    public function index($slug)
    {
        $data = [
            "title" => "Detail Mobil",
            'mobilDetail' => Mobil::where('slug', $slug)->first()
        ];
        return view("user.detailmobil", $data);
    }   //
}
