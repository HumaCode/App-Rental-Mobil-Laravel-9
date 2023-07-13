<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use App\Models\Testimoni;
use Illuminate\Http\Request;

class TestimoniController extends Controller
{
    public function index()
    {
        $data = [
            "testimoni"   => Testimoni::orderBy('id', 'desc')->get(),
        ];
        return view('backend.testimoni', $data);
    }

    public function delete($id)
    {
        Testimoni::find($id)->delete();

        $notification = array(
            'message'       => 'Data berhasil dihapus',
            'alert-type'    => 'success',
        );

        return redirect()->back()->with($notification);
    }

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

    public function penawaran(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'message' => 'required',
        ]);


        $data = [
            'nama' => $request->name,
            'email' => $request->email,
            'pesan' => $request->message,
        ];


        $phone = '6282324118692';


        // Membangun pesan dengan format teks
        $message = '';
        foreach ($data as $key => $value) {
            $message .= "{$key}: {$value}\n"; // Menggunakan karakter * untuk membuat teks tebal
        }

        // URL Encode pesan
        $message = urlencode($message);

        // Membuat URL untuk mengarahkan pengguna ke WhatsApp Web
        $url = "https://web.whatsapp.com/send?phone={$phone}&text={$message}";

        // Melakukan redirect ke URL WhatsApp Web
        return redirect($url);
    }

    public function penawaran2(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'message' => 'required',
        ]);


        $data = [
            'nama' => $request->name,
            'nama_mobil' => $request->nama_mobil . ' tahun ' . $request->tahun,
            'pesan' => $request->message,
        ];


        $phone = '6282324118692';


        // Membangun pesan dengan format teks
        $message = '';
        foreach ($data as $key => $value) {
            $message .= "{$key}: {$value}\n"; // Menggunakan karakter * untuk membuat teks tebal
        }

        // URL Encode pesan
        $message = urlencode($message);

        // Membuat URL untuk mengarahkan pengguna ke WhatsApp Web
        $url = "https://web.whatsapp.com/send?phone={$phone}&text={$message}";

        // Melakukan redirect ke URL WhatsApp Web
        return redirect($url);
    }
}
