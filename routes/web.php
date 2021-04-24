<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\LanguageMiddleware;

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
Route::middleware([LanguageMiddleware::class])->group(function () {
    Route::get('/', function () {
        return view('welcome');
    });

    Route::get('mail/send', 'MailController@send')->name('mailSend');

    Route::get('page', function(){
        return view('page');
    })->name('page');

    Route::post('/page/submit', 'UploadFileController@uploadSubmit')->name('add-form');

    Route::get('/enpage',  function(){
        session()->put('locale', 'en');
        return redirect()->route('page');
    })->name('enpage');

    Route::get('/rupage',  function(){
        session()->put('locale', 'ru');
        return redirect()->route('page');
    })->name('rupage');

});