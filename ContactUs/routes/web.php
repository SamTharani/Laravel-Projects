<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
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

/*Route::get('/', function () {
    return view('welcome');
});*/

//Display Index Page
Route::get('/',[ContactController::class,'index']);
//Display Create New Contact
Route::get('/create',[ContactController::class,'create']);
//Save new contact
Route::post('/store',[ContactController::class,'store']);
// Display edit contact page
Route::get('/edit/{id}',[ContactController::class,'edit'])->name('edit');
//Update existing contacts by id
Route::patch('/update/{id}',[ContactController::class,'update'])->name('update');
// Delete unwanted contact
Route::delete('/delete/{id}',[ContactController::class,'destroy'])->name('delete');
