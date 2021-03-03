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

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/login', function () {
//     return view('login');
// });

Route::get('/home', 'AuthController@index');

Route::get('/login', 'AuthController@login');

Route::get('/register', 'AuthController@register');

Route::get('/index', function () {
    return view ('index');
});





Route::get('/home', [App\Http\Controllers\AuthController::class, 'index'])->name('home');

Route::post('/postlogin', 'AuthController@postlogin')->name('postlogin');

Route::post('/penyewaan', 'AuthController@penyewaan')->name('penyewaan');


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::resource('admin','AdminController');

Route::resource('member','MemberController');

Route::resource('book','BookController');

Route::resource('category','CategoryController');

Route::post('/member', 'MemberController@member');

Route::post('/book', 'BookController@book');

Route::post('/category', 'CategoryController@category');

Route::get('hapusadmin/{id}', 'AdminController@hapusadmin');

Route::get('editcategory/{id}', 'CategoryController@editcategory');

Route::get('hapuscategory/{id}', 'CategoryController@hapuscategory');

Route::get('updatecategory/{id}', 'CategoryController@updatecategory');

Route::get('hapusmember/{id}', 'MemberController@hapusmember');

Route::get('hapusbook/{id}', 'Bookontroller@hapusbook');

Route::get('transaction', 'TransactionController@index');


Route::get('transaction/edit/{id}', 'TransactionController@edit');


Route::get('transaction/showBuku/{id}', 'TransactionController@showBuku');


Route::get('transaction/getAnggota/{id}', 'TransactioniController@getAnggota');


Route::post('/transaction/update/{id}', 'TransactionController@update');


