<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\NoteController;

Route::middleware('guest')->group(function () {
    // login page
    Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
    Route::post('login', [LoginController::class, 'login']);

    // register page
    Route::get('register', [RegisterController::class, 'showRegistrationForm'])->name('register');
    Route::post('register', [RegisterController::class, 'register']);
});

Route::middleware('auth')->group(function () {
    // Home
    Route::get('/', [NoteController::class, 'index'])->name('home');

    // Note resource routes
    Route::resource('notes', NoteController::class)->except(['index']);

    // logout
    Route::post('logout', [LoginController::class, 'logout'])->name('logout');
});
