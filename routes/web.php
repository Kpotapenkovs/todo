<?php

use App\Http\Controllers\ToDoController;
use App\Http\Controllers\DiaryController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/todos', [ToDoController::class, 'index']);

Route::get('/diaries', [DiaryController::class, 'index']);

Route::post('/todos', [ToDoController::class, 'store']);

Route::post('/diaries', [DiaryController::class, 'store']);

Route::get('/todos/{todo}/edit', [ToDoController::class, 'edit']);

Route::get('/diaries/{diary}/edit', [DiaryController::class, 'edit']);

Route::get('/todos/create', [ToDoController::class, 'create']);

Route::get('/diaries/create', [DiaryController::class, 'create']);

Route::get('/todos/{todo}', [ToDoController::class, 'show']);

Route::get('/diaries/{diary}', [DiaryController::class, 'show']);

Route::put('/todos/{todo}', [ToDoController::class, 'update']);

Route::put('/diaries/{diary}', [DiaryController::class, 'update']);


