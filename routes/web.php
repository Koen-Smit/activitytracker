<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ActivityController;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/activities', [PageController::class, 'activities'])->middleware(['auth', 'verified'])->name('activities_overview');
Route::get('/activities/create', [PageController::class, 'create'])->middleware(['auth', 'verified'])->name('activities_create');
Route::post('/activities/create', [ActivityController::class, 'create'])->middleware(['auth', 'verified'])->name('activities_store');
require __DIR__.'/auth.php';
