<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;

class AdminSettingController extends Controller
{
    public function edit()
    {
        $data = [
            'setting' => Setting::find(1),
        ];

        return view('backend.setting', $data);
    }
}
