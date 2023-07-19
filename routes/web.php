<?php

use App\Http\Controllers\ImageUploadController;
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
//     return view('welcome');
// });


Route::controller(ImageUploadController::class)->group(function () {
    Route::get('/', 'index')->name('imageupload.index');
    Route::get('/imageupload/{id}', 'show')->name('imageupload.show');
    Route::post('/imageupload', 'store')->name('imageupload.store');
});
