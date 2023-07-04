<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class AdminSettingController extends Controller
{
    public function edit()
    {
        $data = [
            'setting' => Setting::find(1),
        ];

        return view('backend.setting', $data);
    }

    public function update(Request $request)
    {
        $request->validate([
            'title'             => 'required',
            'keyword'           => 'required',
            'meta_description'  => 'required',
            'about'             => 'required',
            'location'          => 'required',
            'telp'              => 'required',
            'email_web'         => 'required',
            'fb'                => 'required',
            'twitter'           => 'required',
            'ig'                => 'required',
            'logo'              => 'nullable|image|mimes:png,jpg|max:2000',
        ], [
            'title.required'            => 'Nama website tidak boleh kosong..!!',
            'keyword.required'          => 'Keyword tidak boleh kosong..!!',
            'meta_description.required' => 'Meta tidak boleh kosong..!!',
            'about.required'            => 'Tentang website tidak boleh kosong..!!',
            'location.required'         => 'Tentang website tidak boleh kosong..!!',
            'telp.required'             => 'Tentang website tidak boleh kosong..!!',
            'email_web.required'        => 'Tentang website tidak boleh kosong..!!',
            'fb.required'               => 'Tentang website tidak boleh kosong..!!',
            'twitter.required'          => 'Tentang website tidak boleh kosong..!!',
            'ig.required'               => 'Tentang website tidak boleh kosong..!!',
            'logo.image'                => 'Yang anda upload bukan gambar/logo..!!',
            'logo.mimes'                => 'Format gambar/logo tidak valid..!!',
            'logo.max'                  => 'Gambar/logo terlalu besar, maks 2 MB..!!',
        ]);

        $setting = Setting::find(1);
        // $id = $post->id;

        if ($request->hasFile('logo')) {

            if ($setting->logo != null) {
                // Storage::delete($setting->logo);
                // unlink($setting->gambar);
            }

            // $image      = $request->file('logo');
            // // $name_gen   = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
            // Image::make($image)->resize(300, 300);

            // $setting->logo = $request->file('logo')->store('public/uploads/logo');

            $image      = $request->file('logo');
            $name_gen   = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(400, 200)->save('backend/uploads/logo/' . $name_gen);
            $setting->logo   = 'backend/uploads/logo/' . $name_gen;
        }
        $setting->title             = $request->title;
        $setting->keyword           = $request->keyword;
        $setting->meta_description  = $request->meta_description;
        $setting->about             = $request->about;
        $setting->location          = $request->location;
        $setting->telp              = $request->telp;
        $setting->email_web         = $request->email_web;
        $setting->fb                = $request->fb;
        $setting->twitter           = $request->twitter;
        $setting->ig                = $request->ig;
        $setting->save();

        $notification = array(
            'message'       => 'Settingan Web berhasil diubah',
            'alert-type'    => 'success',
        );

        return redirect()->back()->with($notification);
    }
}
