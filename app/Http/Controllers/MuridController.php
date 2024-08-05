<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Murid;

class MuridController extends Controller
{
 public function cekObject()
 {
    $murid = new Murid;
    dump($murid);
}   

public function insert()
{
    $murid = new Murid;
    $murid->nis = '19003036';
    $murid->nama = 'Sari Citra Lestari';
    $murid->tanggal_lahir = '2001-12-31';
    $murid->nilai = 3.5;
    $murid->save();

    dump($murid);
}

public function massAssignment()
{
    Murid::create(
        [
            'nis' => '19021044',
            'nama' => 'Rudi Permana',
            'tanggal_lahir' => '2000-08-22',
            'nilai' => 2.5,
        ]
    );
    return "Berhasil Diproses";
}

public function massAssignment2()
{
    $mahasiswa1 = Murid::create(
        [
            'nis' => '19002032',
            'nama' => 'Rina Kumala Sari',
            'tanggal_lahir' => '2000-06-28',
            'nilai' => 3.4,
        ]
    );
    dump($mahasiswa1);

    $murid2 = Murid::create(
        [
            'nis' => '18012012',
            'nama' => 'James Situmorang',
            'tanggal_lahir' => '1999-04-02',
            'nilai' => 2.7,
        ]
    );
    dump($murid2);

    $murid3 = Murid::create(
        [
           'nis' => '19005011',
           'nama' => 'Riana Putria',
           'tanggal_lahir' => '2000-11-23',
           'nilai' => 2.9,
       ]
   );
    dump($murid3);
}

public function update()
{
    $murid = Murid::find(1);
    $murid->tanggal_lahir = '2001-01-01';
    $murid->nilai = 2.9;
    $murid->save();

    dump($murid);
}

public function updateWhere()
{
    $murid = Murid::Where('nis','19003036')->first();
    $murid->tanggal_lahir = '2001-12-31';
    $murid->nilai = 4.0;
    $murid->save();

    dump($murid);
}

public function massUpdate()
{
    Murid::Where('nis', '19003036')->first()->update([
        'tanggal_lahir' => '2000-04-20',
        'nilai' => 2.1
    ]);
}

public function delete()
{
    $murid = Murid::find(1);
    $murid->delete();

    dump($murid);
}

public function massDelete(){
    $murid = murid::where('nis','>',2)->delete();
    dump($murid);
}

public function all()
{
    $result = Murid::all();

    foreach ($result as $murid){
        echo ($murid->id). '<br>';
        echo ($murid->nis). '<br>';
        echo ($murid->nama). '<br>';
        echo ($murid->tanggal_lahir). '<br>';
        echo ($murid->nilai). '<br>';
        echo '<hr>';
    }
}

public function allView()
{
    $murid = Murid::all();
    return view('tampil-siswa',['murids' => $murid]);
}

public function getWhere()
{
    $murid = Murid::where('nilai', '<', '3')
    ->orderBy('nama', 'desc')->get();
    return view('tampil-siswa', ['murids' => $murid]);
}

public function first()
{
    $murid = Murid::where('nis', '18012012')->first();
    dump($murid);
}


public function limit()
{
    $murid = Murid::latest()->limit(2)->get();
    return view ('tampil-siswa', ['murids' => $murid]);
}

public function softDelete()
{
    Murid::where('nis', '18012012')->delete();
    return "Berhasil Dihapus";
}


}