<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminProfilController extends Controller
{
    public function edit()
    {
        $data = [
            'user' => User::find(auth()->user()->id),
        ];

        return view('backend.profil_edit', $data);
    }

    public function update(Request $request)
    {
        $request->validate([
            'name'  => 'required',
            'email' => 'required',
        ], [
            'name.required'     => 'Nama tidak boleh kosong..!!',
            'email.required'    => 'Email tidak boleh kosong..!!',
        ]);

        $userData           = User::find(auth()->user()->id);
        $userData->name     = $request->name;
        $userData->email    = $request->email;
        $userData->save();

        $notification = array(
            'message'       => 'Profil berhasil diubah',
            'alert-type'    => 'success',
        );

        return redirect()->back()->with($notification);
    }

    public function ubahPassword()
    {
        $data = [
            'user' => User::find(auth()->user()->id),
        ];

        return view('backend.password_edit', $data);
    }

    public function updatePassword(Request $request)
    {
        // dd($request->all());

        $request->validate([
            'passLama' => 'required',
            'passBaru' => 'required|confirmed',
        ], [
            'passLama.required'  => 'Password lama tidak boleh kosong..!!',
            'passBaru.required'  => 'Password baru tidak boleh kosong..!!',
            'passBaru.confirmed' => 'Password tidak cocok..!!',
        ]);

        if (!Hash::check($request->passLama, auth()->user()->password)) {


            $notification = array(
                'message'       => 'Password tidak cocok..!!',
                'alert-type'    => 'error',
            );

            return back()->with($notification);
        }

        // update new Password
        User::whereId(auth()->user()->id)->update([
            'password' => Hash::make($request->passBaru)
        ]);

        $notification = array(
            'message'       => 'Password berhasil diubah',
            'alert-type'    => 'success',
        );

        return back()->with($notification);
    }
}
