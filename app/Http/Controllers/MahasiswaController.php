<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App;

class MahasiswaController extends Controller
{

    public function formPendaftaran($locale = 'id')
    {
        App::setLocale($locale);
        return view('form-pendaftaran', ["locale" => $locale]);
    }

    public function prosesForm(Request $request)
    {
        App::setLocale($request->locale);
        $validateData = $request->validate([
           'nim' => ['required','size:8'],
           'nama' => ['required','min:3','max:50'],
           'email' =>['required','email'],
           'jenis_kelamin' => ['required','in:P,L'],
           'jurusan' =>['required'],
           'alamat' => [],
       ]);
        dump($validateData);

        echo $validateData['nim']; echo "<br>";
        echo $validateData['nama']; echo "<br>";
        echo $validateData['email']; echo "<br>";
        echo $validateData['jenis_kelamin']; echo "<br>";
        echo $validateData['jurusan']; echo "<br>";
        echo $validateData['alamat']; echo "<br>";
    }

}