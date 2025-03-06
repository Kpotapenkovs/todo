<?php

use App\Http\Controllers\ToDoController;
use App\Http\Controllers\DiaryController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/todos', [ToDoController::class, 'show']);

Route::get('/diaries', [DiaryController::class, 'index']);

Route::get('/todos/{todo_id}', [ToDoController::class, 'show']);