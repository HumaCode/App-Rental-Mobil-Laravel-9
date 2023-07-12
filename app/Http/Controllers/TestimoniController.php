<?php

namespace App\Http\Controllers;

use App\Models\Testimoni;
use Illuminate\Http\Request;

class TestimoniController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'nullable',
            'testimoni' => 'required',
            'message' => 'required',
        ]);

        if ($request->name == null) {
            $name = 'Anonimus';
        } else {
            $name = $request->name;
        }

        $testimoni = new Testimoni();
        $testimoni->name = $name;
        $testimoni->testimoni = $request->testimoni;
        $testimoni->message = $request->message;
        $testimoni->save();

        return redirect()->back()->with('success', 'Testimoni berhasil dikirim');
    }
}
