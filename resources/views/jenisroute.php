<?php

// route parameter
Route::get('/mahasiswa/{nama}', function($nama) {
    return "Tampilkan data nama mahasiswa bernama $nama";
});

Route::get('/stok_barang/{jenis}/{merek}', function($jenis,$merek) {
    return "Cek sisa untuk $jenis $merek";
});

Route::get('stok/{jenis?}/{merek?}', function($a = 'hp' , $b = 'samsung') {
    return "Cek sisa untuk $a $b";
});


// Route Parameter dengan Regular Expression
Route::get('users/{id}', function($id) {
    return "Tampilkan user dengan id $id";
});

Route::get('user/{id}', function($id) {
    return "Tampilkan user dengan id $id";
})->where('id', '[0-9]+');

Route::get('userss/{id}', function($id) {
    return "Tampilkan user dengan id = $id"; 
})->where('id','[A-Z]{2}[0-9]+');


// Route Redirect
Route::get('/hubungi-kami', function() {
    return '<h1>Hubungi Kami</h1>';
});
Route::redirect('/contact-us', '/hubungi-kami');


// Route Groups
Route::prefix('/admin')->group(function(){

    Route::get('/mahasiswa', function() {
        echo "<h1>Daftar Mahasiswa</h1>";
    });

    Route::get('/dosen', function() {
        echo "<h1>Daftar Dosen</h1>";
    });

    Route::get('/karyawan', function() {
        echo "<h1>Daftar Karyawan</h1>";
    });
});


// Route Fallback
Route::fallback(function(){
    return "Maaf,alamat tidak ditemukan";
});


// Roure Priority
Route::get('buku/1', function() {
    return "Buku ke-1";
});

Route::get('buku/1', function() {
    return "Buku Saya ke-1";
});

Route::get('buku/1', function() {
    return "Buku Kita ke-1";
});

