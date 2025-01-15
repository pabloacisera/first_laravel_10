<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('db_test', function() {
  try {
    \DB::connection()->getPdo();
    return "connection success";
  } catch(\Exception $e) {
    return "error al conectar base de datos" .$e->getMessage();
  }
});
