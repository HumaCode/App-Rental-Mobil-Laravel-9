<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DetailController extends Controller
{
    public function index()
    {
        $data = [
            "title" => "Detail Mobil",
        ];
        return view("user.detailmobil", $data);
    }   //
}
