<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\EventAdminController;
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



// No need to be connected to an account to access theses pages
Route::get('/', function () {
    return view('accueil');
});


Route::get('nous-rejoindre', function () {
    return view('pages/nous-rejoindre');
});


Route::resource('event', EventController::class)->only(['index']);


Route::get('qui-sommes-nous', function () {
    return view('pages/qui-sommes-nous');
});


Route::get('l-actualite', function () {
    return view('pages/l-actualite');
});


Route::get('nous-contacter', function () {
    return view('pages/nous-contacter');
});

Route::get('mentions-legales', function () {
    return view('pages/mentions-legales');
});

Route::get('event-unique', function () {
    return view('pages/event-unique');
});



// Need to be connected to an account to access theses pages
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


    Route::resource('eventadmin', EventAdminController::class)->only(['index', 'create', 'store', 'destroy']); //->only(['index', 'create', 'store', 'show', 'edit', 'update', 'destroy']);

});

require __DIR__.'/auth.php';
