<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index()
    {
        $data = [
            "title" => "Client",
        ];
        return view("user.client", $data);
    }   //
}
