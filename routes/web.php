<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ToDoController;
use App\Http\Controllers\DiariesController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/todos', [ToDoController::class, 'index']);
Route::get('/diaries', [DiariesController::class, 'index']);
Route::get('/todos/{todo}', [ToDoController::class, 'show']);