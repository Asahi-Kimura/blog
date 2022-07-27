<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

//一覧画面表示
Route::get('/', [BlogController::class,'index']
)->name('index');
//ブログ入力フォーム
Route::get('/blog/create', [BlogController::class,'blogCreate']
)->name('blogCreate');
//ブログ詳細
Route::get('/blog/{id}', [BlogController::class,'blogDetail']
)->name('blogDetail');

//新規登録一覧
Route::post('/blog/store', [BlogController::class,'blogStore']
)->name('blogStore');






