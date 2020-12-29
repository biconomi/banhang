<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestingController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\FrontendController;

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
//     return view('testing01');
// });
// day1
// Route::get('/testing/{id}', 
//     [TestingController::class, 'testing01'
// ])->name('routeTest');
// Route::get('/photo/{ten1}/{ten2}',function($ten1,$ten2)
// {
// 	return "chào mừng bạn đến với các tên $ten1 và $ten2";
// })
// ;
// Route::resource('testing', PhotoController::class)->only([
//     'index'
// ]);
// Route::resource('testing002', PhotoController::class)->only([
//     'index'
// ]);
// Route::get('/testing003/{value}',function ($value)
// {
// 	return view('testing01',["value"=>$value]);
// });

// xay dung router project
// day2
// Route::get('','FrontendController@GetIndex');
Route::get('/', 
    [FrontendController::class, 'GetIndex'
    
])->name('routeTest');