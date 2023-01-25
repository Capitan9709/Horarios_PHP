<?php

use App\Http\Controllers\AsignaturasController;
use App\Http\Controllers\HorasController;
use App\Http\Controllers\ProfileController;
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
});

Route::get('/asignaturas', [AsignaturasController::class, 'index'])->middleware(['auth', 'verified'])->name('asignaturas');

Route::get('/asignaturas/create', [AsignaturasController::class, 'create'])
->middleware(['auth', 'verified'])->name('asignaturas.create');

Route::post('/asignaturas/create', [AsignaturasController::class, 'store'])
->middleware(['auth', 'verified'])->name('asignaturas.store');

Route::get('/asignaturas/edit/{codAs}', [AsignaturasController::class, 'edit'])
->middleware(['auth', 'verified'])->name('asignaturas.edit');

Route::put('/asignaturas/edit/{codAs}', [AsignaturasController::class, 'update'])
->middleware(['auth', 'verified'])->name('asignaturas.edit');

Route::get('/asignaturas/destroy/{codAs}', [AsignaturasController::class, 'destroy'])
->middleware(['auth', 'verified']);



Route::get('/horas', [HorasController::class, 'index'])->middleware(['auth', 'verified'])->name('horas');

Route::get('/horas/create', [HorasController::class, 'create'])
->middleware(['auth', 'verified'])->name('horas.create');

Route::post('/horas/create', [HorasController::class, 'store'])
->middleware(['auth', 'verified'])->name('horas.store');

Route::get('/horas/edit/{{$datos}}', [HorasController::class, 'edit'])
->middleware(['auth', 'verified'])->name('horas.edit');

Route::put('/horas/edit/{diaH}/{horaH}', [HorasController::class, 'update'])
->middleware(['auth', 'verified'])->name('horas.edit');

Route::get('/horas/destroy/{diaH}/{horaH}/{asignatura_id}', [HorasController::class, 'destroy'])
->middleware(['auth', 'verified']);


Route::get('/dashboard', function () {
    return view('horario');
})->middleware(['auth', 'verified'])->name('horario');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
