<?php

use Illuminate\Support\Facades\Route;

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

Route::middleware('admin')->group(function () {
    Route::prefix('admin')->group(function () {
        Route::get('/', 'Admin\BerandaController@index')->name('beranda_admin');
        Route::get('/iqamah', 'Admin\IqamahController@index')->name('iqamah_admin');
        Route::get('/jumat', 'Admin\JumatController@index')->name('jumat_admin');
        Route::get('/kajian', 'Admin\KajianController@index')->name('kajian_admin');
        Route::get('/agenda', 'Admin\AgendaController@index')->name('agenda_admin');
        Route::get('/konten', 'Admin\KontenController@index')->name('konten_admin');
        Route::get('/background', 'Admin\BackgroundController@index')->name('background_admin');
        Route::get('/inventaris', 'Admin\InventarisController@index')->name('inventaris_admin');
        Route::get('/pengaturan', 'Admin\PengaturanController@index')->name('pengaturan_admin');
        Route::get('/tentang', 'Admin\TentangController@index')->name('tentang_admin');
    });
});
