<?php

use Illuminate\Support\Facades\Route;

//追記
use App\Http\Controllers\FormController;

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
})->name('welcome');

// 認証機能(最初から記載してあった)
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


// Route::get('/', [FormController::class, 'index'])->name('contact.index');
Route::get('contact/create', [FormController::class, 'create'])->name('contact.create');
Route::post('contact/store', [FormController::class, 'store'])->name('contact.store');
Route::get('contact/thanks', [FormController::class, 'thanks'])->name('contact.thanks');


// prefixでフォルダ指定 middlewareで認証の場合なら表示
Route::group(['prefix' => 'contact', 'middleware' => 'auth'], function(){
    Route::get('show', [FormController::class, 'show'])->name('contact.show');
});









//REST表示
// Route::resource('forms', App\Http\Controllers\FormController::class);

require __DIR__.'/auth.php';
