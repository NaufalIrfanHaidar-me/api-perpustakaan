<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiswaC;


Route::get('/', function(){
    dd('Hello World API !');
});

Route::get('/siswa', [SiswaC::class, 'index']);