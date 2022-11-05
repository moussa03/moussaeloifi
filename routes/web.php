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
})->name('home');

Route::get('/contactez_nous',[App\Http\Controllers\UserController::class,'contactez_nous']);
 Route::post('/subscription',[App\Http\Controllers\SubscriberController::class,'create'])->name('subscription');
// Route::get('/test',[App\Http\Controllers\SubscriberController::class,'test'])->name('test');
Route::post('/newsletter',[App\Http\Controllers\SubscriberController::class,'add_to_news_letter'])->name('newsletter');
Route::post('/project',[App\Http\Controllers\DemandProjectController::class,'DemandProject'])->name('demande_project');

