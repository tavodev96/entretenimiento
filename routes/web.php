<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\FilmsComponent;
use App\Http\Livewire\CatalogComponent;
use App\Http\Livewire\WatchMovieComponent;

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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('films', FilmsComponent::class)->name('films')->middleware('role:Admin');
    Route::get('catalog', CatalogComponent::class)->name('catalog');

    Route::get('watchMovie/{movie}', WatchMovieComponent::class)->name('watchMovie')->middleware('permission:Catalog');
});
