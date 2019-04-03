<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('Project_1', function () {
    return ('Hello WorLd');
});

Route::get('/show/{id?}', function ($id=1) {
	echo "Nilai Parameter Adalah ".$id;
});

Route::get('/show/{id}', function ($id) {
	echo "Nilai Parameter Adalah ".$id;
});

Route::get('/edit/{nama}', function($nama) {
	echo "Nilai Parameter Adalah ".$nama;
}) -> where('nama','[A-Za-z]+');


Route::get('/index', function(){
	echo "<a href='".route('create')."'>Akses Route dengan nama </a>";
});

Route::get('/create', function(){
	echo "Route diakses menggunakan nama";
})->name('create');

Route::get('/produk', 'produkController@index');

Route::get('/produk/show', 'produkController@show');


Route::get('/halaman',function(){
$title = 'Harry Pooter';
$konten = 'Harry Potter and the deathly hallows: part 2.Harry Potter and the Deathly Hallows – Bagian 2 adalah 
film fantasi epik 2011 yang disutradarai oleh David Yates.
 Film merupakan adaptasi dari novel karangan J.K Rowling,
 Harry Potter dan Relikui Kematian dan merupakan film bagian dua. Film merupakan sekuel dari The Deathly Hallows';
return view('konten.halaman',compact('title','konten'));
});