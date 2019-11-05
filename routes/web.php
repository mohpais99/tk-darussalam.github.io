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
Route::get('/', 'HomeController@index');

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/guru', 'HomeController@guru');
Route::get('/gallery', 'HomeController@gallery');
Route::get('/profile-sekolah', 'HomeController@profile');
Route::get('/info-pendaftaran', 'HomeController@pendaftaran');
Route::post('/kirim-pesan', 'HomeController@pesan');



Route::get('/login', 'LoginController@index')->name('login');
Route::post('/post-login', 'LoginController@store');
Route::get('/logout', 'LoginController@destroy');

Route::group(['middleware' => ['auth', 'checkRole:superadmin']], function () {
    // guru
    Route::get('/data-guru', 'GuruController@index');
    Route::get('/data-guru/create', 'GuruController@create');
    Route::post('/data-guru/create/store', 'GuruController@store');
    Route::get('/data-guru/{id}/edit', 'GuruController@edit');
    Route::post('/data-guru/{id}/update', 'GuruController@update');
    Route::get('/data-guru/{id}/destroy', 'GuruController@destroy');
    // Berita
    Route::get('/pemberitahuan', 'PanelController@news');
    Route::post('/pemberitahuan/store', 'PanelController@newsCreate');
    Route::get('/pemberitahuan/delete', 'PanelController@newsDelete');
    // Print Out
    Route::get('/semua-tabungan', 'PanelController@allTabungan');
    Route::get('/print-tabungan/{id}', 'PrintController@print');

    // Pesan
    Route::get('/pesan', 'PanelController@pesan');
    Route::get('/pesan/{id}/delete', 'PanelController@pesanDelete');
});

Route::group(['middleware' => ['auth', 'checkRole:superadmin,guru,siswa']], function () {
    Route::get('/panel', 'PanelController@index');
    // Siswa
    Route::get('/data-siswa/{id}', 'SiswaController@index');
    Route::get('/datasiswa/create', 'SiswaController@create');
    Route::post('/data-siswa/create/store', 'SiswaController@store');
    Route::get('/data-siswa/{id}/edit', 'SiswaController@edit');
    Route::get('/data-siswa/{id}/destroy', 'SiswaController@destroy');
    // Galery
    Route::get('/gallery-tk-jaya', 'PanelController@showGallery');
    Route::get('/gallery-tk-jaya/create', 'PanelController@addGallery');
    Route::post('/gallery-tk-jaya/store', 'PanelController@gallery');
    // Tabungan
    Route::get('/tabungan', 'PanelController@tabungan');
    Route::post('/addTabungan/{id}', 'PanelController@tabunganCreate');
    // Nilai
    Route::get('/data-nilai/{id}', 'NilaiController@create');
    Route::post('/data-nilai/{id}/store', 'NilaiController@store');
    Route::get('/data-nilai/{id}/edit', 'NilaiController@edit');
    Route::post('/data-nilai/{id}/update', 'NilaiController@update');
    Route::get('/print-nilai/{id}', 'PrintController@printNilai');
    // Profile
    Route::get('/profile', 'PanelController@profile');
    Route::post('/profile/{id}/update', 'PanelController@update');
    Route::post('/profile/{id}/changePassword', 'PanelController@changePassword');
    // Akademik
    Route::get('/nilai-akademik', 'PanelController@akademik');
    // Event
    Route::get('/event-tk-jaya', 'PanelController@event');
    Route::get('/event-tk-jaya/create', 'PanelController@createEvent');
    Route::post('/event-tk-jaya/store', 'PanelController@inputEvent');
});
