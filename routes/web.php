<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Новый маршрут для отображения hello.blade.php
Route::get('/hello', function () {
    return view('hello', ['title' => 'Добро пожаловать!']);
});