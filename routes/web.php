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

Route::get('/attendance', function () {
    return view('pages.attendance');
});
Route::get('/registration', function () {
    return view('pages.registration');
});

Route::get('/studentinfo', function () {
    return view('pages.studentinfo');
});

Route::get('/', function () {
    return view('pages.welcome');

});
Route::get('/registeradmin', function () {
    return view('pages.registeradmin');
});
Route::get('/edit', function () {
    return view('pages.edit');
});
Route::get('/attendance', function () {
    return view('attendance');
});
Route::get('/index', function () {
    return view('pages.index');
});




Route::resource('studentinfo','App\Http\Controllers\RegistrationController')->middleware('auth');
Route::post('/addimage','App\Http\Controllers\RegistrationController@store')->name('addimage');
Route::get('/delete/{id}','App\Http\Controllers\RegistrationController@destroy')->name('studentinfo.destroy');
Route::get('/edit/{id}','App\Http\Controllers\RegistrationController@edit')->name('studentinfo.edit');
Route::post('/update','App\Http\Controllers\RegistrationController@update')->name('studentinfo.update');



Route::resource('attendance','App\Http\Controllers\AttendanceController')->middleware('auth');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
