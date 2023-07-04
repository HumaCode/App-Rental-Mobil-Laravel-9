<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Mobil;
use Illuminate\Http\Request;

class AdminMobilController extends Controller
{
    public function index()
    {
        $data = [
            'mobil' => Mobil::orderBy('id', 'desc')->get(),
        ];

        return view('backend.data_mobil', $data);
    }
}
