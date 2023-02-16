<?php

use Illuminate\Http\Request;
use App\Http\Controllers\AuthC;
use App\Http\Controllers\PostC;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;

Route::get('/', function(){
    return 'Hello World API !';
});
Route::get('/posts', [PostC::class, 'index'])->middleware(['auth:sanctum']);
Route::get('/posts/{id}', [PostC::class, 'detail'])->middleware(['auth:sanctum']);

Route::post('/login', [AuthC::class, 'login']);

Route::get('/password', function(){
    return Hash::make('rahasia');
});