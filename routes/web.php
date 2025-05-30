<?php

use App\Http\Controllers\PetController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/page1', function () {
//     return view('page1');
// });
Route::view('/page1','page1'); //same as above (can pass params too)

Route::get('/pets',[PetController::class,'index']);

Route::get('/studentTypes', [StudentController::class,'index'])->name('student.index');
/* 
Route::get
Route::post
put
patch
delete
options

can have route with multiple methods:
Route::match(['get','post'],'/', function () { 
    return view('');
});
*/
