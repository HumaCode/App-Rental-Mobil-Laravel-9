<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        $data = [
            "title" => "About",
            "setting" => Setting::find(1),
        ];
        return view("user.about", $data);
    }   //
}
