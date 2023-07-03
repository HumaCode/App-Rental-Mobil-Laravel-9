<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function index()
    {
        return view('backend.dashboard');
    }

    public function logout(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');

        return redirect()->route('admin_login');
    }

    public function data_admin()
    {
        $data = [
            'admin' => User::orderBy('id', 'desc')->get(),
        ];

        return view('backend.daftar_admin', $data);
    }

    public function tambah_admin()
    {
        return view('backend.tambah_admin');
    }

    public function store_admin(Request $request)
    {
        $request->validate([
            'name'  => 'required|unique:users,name',
            'email' => 'required|unique:users,email',
        ], [
            'name.required'     => 'Nama tidak boleh kosong..!!',
            'email.required'    => 'Email tidak boleh kosong..!!',
            'email.unique'      => 'Email sudah terdaftar..!!',
            'name.unique'       => 'Nama sudah terdaftar..!!',
        ]);

        $userData               = new User();
        $userData->name         = $request->name;
        $userData->email        = $request->email;
        $userData->password     = Hash::make($request->password);
        $userData->save();

        $notification = array(
            'message'       => 'Admin berhasil ditambahkan',
            'alert-type'    => 'success',
        );

        return redirect()->route('data.admin')->with($notification);
    }

    public function edit_admin($id)
    {
        $data = [
            'admin' => User::findOrFail($id),
        ];

        return view('backend.edit_admin', $data);
    }

    public function update_admin(Request $request, $id)
    {
        $request->validate([
            'name'  => 'required|unique:users,name,' . $id,
            'email' => 'required|unique:users,email,' . $id,
        ], [
            'name.required'     => 'Nama tidak boleh kosong..!!',
            'email.required'    => 'Email tidak boleh kosong..!!',
            'email.unique'      => 'Email sudah terdaftar..!!',
            'name.unique'       => 'Nama sudah terdaftar..!!',
        ]);

        $userData               = User::findOrFail($id);
        $userData->name         = $request->name;
        $userData->email        = $request->email;
        $userData->save();

        $notification = array(
            'message'       => 'Admin berhasil diubah',
            'alert-type'    => 'success',
        );

        return redirect()->route('data.admin')->with($notification);
    }

    public function delete_admin($id)
    {
        $admin = User::findOrFail($id);

        if ($admin->id == auth()->user()->id) {
            $notification = array(
                'message'       => 'Admin tidak bisa dihapus',
                'alert-type'    => 'error',
            );

            return redirect()->back()->with($notification);
        }

        $admin->delete();


        $notification = array(
            'message'       => 'Admin berhasil dihapus',
            'alert-type'    => 'success',
        );

        return redirect()->back()->with($notification);
    }
}
