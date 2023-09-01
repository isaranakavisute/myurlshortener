<?php
use App\Http\Controllers\ShortLinkController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/isara', function () {
    return view('isara');
});

Route::get('isara-generate-shorten-link', 'App\Http\Controllers\ShortLinkController@index');
Route::post('isara-generate-shorten-link', 'App\Http\Controllers\ShortLinkController@store')->name('generate.shorten.link.post');
   
Route::get('{code}', 'App\Http\Controllers\ShortLinkController@shortenLink')->name('shorten.link');


