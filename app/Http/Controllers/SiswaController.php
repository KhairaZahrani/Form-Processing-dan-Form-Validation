<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SiswaController extends Controller
{


// DB FACADE
    public function insertSql()
    {
        $result = DB::insert("insert into siswas (nis,nama,tanggal_lahir,nilai) values ('19987002','Khaira Zahrani','2008-01-02', 7.6)");
        dump($result);
    }

    public function insertTimestamp()
    {
        $result = DB::insert("insert into siswas (nis, nama, tanggal_lahir, nilai, created_at, updated_at) values ('19002032', 'Rina Kumala Sari', '2000-06-28', 3.4 , now(), now())");
        dump($result);
    }

    public function insertPrepared(){
       $result = DB::insert("insert into siswas (nis, nama, tanggal_lahir, nilai, created_at, updated_at) VALUES (?,?,?,?,?,?)",
        [
            '18012012', 'James Situmorang', '1999-04-02', 2.7, now(), now()
        ]);
       dump($result);
   }

   public function insertBinding()
   {
    $result = DB::insert('insert into siswas (nis, nama, tanggal_lahir, nilai, created_at, updated_at) values (:nis, :name, :tgl, :nilai, :created, :update)',
        [
            'nis' => '19005011',
            'name' => 'Riana Putria',
            'tgl' => '2000-11-23',
            'nilai' => 2.7,
            'created' => now(),
            'update' => now(),
        ]);
    dump($result);
}

// public function update()
// {
//     $result = DB::update('update siswas set created_at = now(), updated_at = now() where nis = ?', ['19987002']);
//     dump($result);
// }

// public function delete()
// {
//     $result = DB::delete('delete from siswas where nama = ?', ['James Situmorang']);
//     dump($result);
// }

// public function select()
// {
//     $result = DB::select('SELECT * FROM siswas');
//     dump($result);
// }

public function selectTampil()
{
    $result = DB::select ('SELECT * FROM siswas');

    echo ($result[0]->id). '<br>';
    echo ($result[1]->nis). '<br>';
    echo ($result[2]->nama). '<br>';
    echo ($result[2]->tanggal_lahir). '<br>';
    echo ($result[0]->nilai). '<br>';
}

public function selectView()
{
    $result = DB::select('select * from siswas');
    return view('tampil-siswa', ['siswas' => $result]);
}

public function selectWhere()
{
    $result = DB::select('select * from siswas where nilai > ? ORDER BY nama ASC', [3]);
    return view('tampil-siswa', ['siswas' => $result]);
}

public function statement()
{
    $result = DB::statement('TRUNCATE siswas');
    return "Tabel siswa sudah dikosongkan";
}





// QUERY BUILDER

public function insert()
{
    $result = DB::table('siswas')->insert([
        'nis' => '19003036',
        'nama' => 'Sari Citra Lestari',
        'tanggal_lahir' => '2001-12-31',
        'nilai' => 3.5,
        'created_at' => now(),
        'updated_at' => now(),
    ]);
    dump($result);
}

public function insertBanyak()
{
    $result = DB::table('siswas')->insert(
        [
            [
                'nis' => '19002032',
                'nama' => 'Rina Kumala Sari',
                'tanggal_lahir' => '2000-06-28',
                'nilai' => 3.4,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
               'nis' => '18012012',
               'nama' => 'James Situmorang',
               'tanggal_lahir' => '1999-04-02',
               'nilai' => 2.7,
               'created_at' => now(),
               'updated_at' => now(), 
           ],
       ]
   );
    dump($result);
}

public function update()
{
    $result = DB::table('siswas')
    ->where('nama', 'Sari Citra Lestari')
    ->update(
        [
            'tanggal_lahir' => '2002-01-01',
            'nilai' => 3.19,
            'updated_at' => now(),
        ]);
    dump($result);
}

public function updateWhere()
{
    $result = DB::table('siswas')
    ->where('nilai', '<', 3 )
    ->update(
        [
            'tanggal_lahir' => '2002-01-01',
            'updated_at' => now(),
        ]);
    dump($result);
}

public function updateOrInsert()
{
    $result = DB::table('siswas')
    ->updateOrInsert(
        [
            'nis' => '18012012',
        ],
        [
            'nama' => 'James Situmorang',
            'tanggal_lahir' => '2002-01-01',
            'nilai' => 2.7,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    dump($result);
}

public function delete()
{
    $result = DB::table('siswas')
    ->where('nilai','>=', 3.4)
    ->delete();

    dump($result);
}

public function get()
{
    $result = DB::table('siswas')->get();
    dump($result);
}

public function getTampil()
{
    $result = DB::table('siswas')->get();
    echo ($result[0] ->id). '<br>';
    echo ($result[0]->nis). '<br>';
    echo ($result[0]->nama). '<br>';
    echo ($result[0]->tanggal_lahir). '<br>';
    echo ($result[0]->nilai). '<br>';
}

public function getView()
{
    $result = DB::table('siswas')->get();
    return view('tampil-siswa',['siswas' => $result]);
}

public function getWhere()
{
    $result = DB::table('siswas')
    ->where('nilai', '<', 3)
    ->orderBy('nama','desc')
    ->get();

    return view('tampil-siswa',['siswas' => $result]);
}

public function select()
{
    $return = DB::table('siswas')
    ->select('nis', 'nama as nama_siswa')
    ->get();
    dump($return);
}

public function take()
{
    $result = DB::table('siswas')
    ->orderBy('nama', 'asc')->skip(1)->take(2)
    ->get();
    return view('tampil-siswa', ['siswas' => $result]);
}

public function first()
{
    $result = DB::table('siswas')
    ->where('nama','James Situmorang')->first();

    return view('tampil-siswa', ['siswas' => [$result]]);
}


public function find(){

    $result = DB::table('siswas')->find(4);
    return view('tampil-siswa',['siswas' => [$result]]);
}

public function raw()
{
    $result = DB::table('siswas')
    ->selectRaw('count(*) as total_siswa')
    ->get();

    echo ($result[0]->total_siswa). '<br>';
}




// MINI CASE STUDY
public function index()
{
    $result = DB::table('siswas')->select('nis', 'nama')->get();
    return view('index-siswa', ['siswas' => $result]);
}

public function siswa($nis)
{   
    $result = DB::table('siswas')->where('nis',$nis)->get();
    return view('tampil-siswa',['siswas' => $result]);

}

}
