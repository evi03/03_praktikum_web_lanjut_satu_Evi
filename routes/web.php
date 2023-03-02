<?php

use App\Http\Controllers\HalamanController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

//NOMOR 1
Route::get('/',[HalamanController::class, 'home']); 


//NOMOR 2
Route::get('/product',[HalamanController::class, 'product']);
Route::prefix('/produk')->group(function(){
    route::get('/makanan', function(){
        return view('produk.makanan');
    });
    route::get('/minuman', function(){
        return view('produk.minuman');
    });
});


//NOMOR 3
Route::get('/news',[HalamanController::class, 'news']);

//NOMOR 4
Route::get('/program',[HalamanController::class, 'program']);  
Route::prefix('/program')->group(function(){
    route::get('/gamers', function(){
        return view('program.gamers');
    });
    route::get('/education', function(){
        return view('program.education');
    });
});

//NOMOR 5
Route::get('/about_us',[HalamanController::class, 'about_us']); 

//NOMOR 6
 Route::get('/contact_us',[HalamanController::class, 'contact_us']); 
