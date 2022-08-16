<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KelvinController;
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

 Route::get('/greeting', function () {
        return view('greeting', ['name' => '陳華']);
 });
 
Route::get('/Kelvin/{user}', [KelvinController::class, 'show']);