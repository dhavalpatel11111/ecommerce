<?php

use App\Http\Controllers\ProductController;
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

// Route::get('/', function () {
//     return view('frontend.layout.index');
// });

Route::get("/" , [ProductController::class , "index"]);
Route::get("/productpage" , [ProductController::class , "showForm"]);
Route::post('/addimg', [ProductController::class, 'addimg'])->name('addimg');
Route::post('/addProduct', [ProductController::class, 'addProduct']);
Route::get('/productList', [ProductController::class, 'productList']);
Route::post('/deleteProduct', [ProductController::class, 'deleteProduct']);
Route::post('/editProduct', [ProductController::class, 'editProduct']);
Route::post('/imgdel', [ProductController::class, 'imgdel']);

