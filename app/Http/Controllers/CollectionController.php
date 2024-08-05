<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CollectionController extends Controller
{
    public function collectionSatu()
    {
     $collection = collect([1,2,3,4,5,6,7]);

     echo '<pre>';
     var_dump($collection);
       // selain var_dump juga bisa pakai dump.
     echo '<pre>';
 }

 public function collectionDua()
 {
    $collection = collect([1,9,3,4,5,3,5,7]);

    echo $collection[0]; echo '<br>';
    echo $collection[3]; echo '<br>';

    foreach ($collection as $nilai) {
        echo "$nilai";
    }

}

public function collectionTiga()
{
    $collection = collect([1,2,3,4,5,6,7,8]);
    echo "$collection";
}

public function collectionEmpat()
{
    $collection = collect(["belajar", "laravel", "harus semangat"]);
    echo "$collection";

    echo "<br>";

    $collection = collect([
        "nama" => "Khaira Zahrani", 
        "kelas" => "XI RPL 2",
        "kota" => "Binjai",
        "sekolah" => "SMKN 1 BINJAI",
    ]);
    echo "$collection";
}

public function collectionLima()
{
    $collection = collect([1,9,3,4,5,3]);

    dump( $collection -> max());
    dump( $collection -> min());
    dump( $collection->sum() ); 
    dump( $collection->avg() ); 
    dump( $collection->median() ); 

    echo '<br>';
    $collection = collect([1,10,8,45,32,2]);

    dump($collection->random());

}


public function collectionEnam()
{
   $collection = collect([
    ['namaProduk' => 'Laptop A', 'harga' => 59990000],
    ['namaProduk' => 'Smartphone B', 'harga' => 1599000],
    ['namaProduk' => 'Speaker C', 'harga' => 350000],
]);

   $hasil = $collection->firstWhere('harga', 350000)->all();
     echo $hasil['namaProduk']."<br>";      // Speaker C
 }

}