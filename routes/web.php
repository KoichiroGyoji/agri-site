<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AgrisController; //バージョンが古いため追記の必要性あり
use App\Http\Controllers\ContactController; 

use App\Http\Controllers\ProfileController;



// Route::get('/', 'AgrisController@index');

Route::get('/', [AgrisController::class, 'home']);

Route::get('/weare', [AgrisController::class, 'weare']);

Route::get('/onlineshop', [AgrisController::class, 'onlineshop']);

Route::get('/onlineshopshow/{id}', [AgrisController::class, 'onlineshopshow'])->name('onlineshopshow');

Route::get('/onlineshop/purchase/{id}', [AgrisController::class, 'purchase'])->name('purchase');

Route::post('/onlineshop/purchaseConfirm', [ContactController::class, 'purchaseConfirm'])->name('purchaseConfirm');

Route::post('/onlineshop/purchaseSend', [ContactController::class, 'purchaseSend'])->name('purchaseSend');

Route::get('/contact', [AgrisController::class, 'contact'])->name('contact');

//確認ページ
Route::post('/confirm', [ContactController::class, 'confirm'])->name('confirm');

//送信完了ページ
Route::post('/contact/thanks', [ContactController::class,'send'])->name('send');

//7つの要素をルーティングしている
// Route::resource('agris', AgrisController::class);

//7つのルーティングを省略無しで書いた場合
Route::get('/index', [AgrisController::class, 'index'])->name('index');

Route::get('/show/{id}', [AgrisController::class, 'show'])->name('show');

Route::get('/create', [AgrisController::class, 'create'])->name('create');

Route::get('/edit/{id}', [AgrisController::class, 'edit'])->name('edit');

Route::delete('/destroy', [AgrisController::class, 'destroy'])->name('destroy');

Route::put('/update', [AgrisController::class, 'update'])->name('update');

Route::post('/store', [AgrisController::class, 'store'])->name('store');


Route::get('/login', function () {
    return view('auth.login');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
