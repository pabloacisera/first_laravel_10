<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*importar modulo de conexion de a base de datos*/
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\MovieController;

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


Route::get('/db_test', function () {
    try {
        // Intentamos realizar una consulta simple
        DB::connection()->getPdo();
        return response()->json(['message' => 'Conexión exitosa']);
    } catch (\Exception $e) {
        // Si ocurre un error, mostramos el mensaje de error
        return response()->json(['error' => 'Error de conexión: ' . $e->getMessage()]);
    }
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

// No olvidar usar la ruta
Route::get('/movies', [MovieController::class, 'index'])->name('movies.index');