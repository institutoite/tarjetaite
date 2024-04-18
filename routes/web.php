<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ComentController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('descargar/contacto',[ComentController::class,"download"])->name("descargar.contacto");
