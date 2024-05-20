<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\InventController;
use Illuminate\Support\Facades\Route;

Route::get('/dashboard-admin', function () {
    return view('components.admin.dashboard-admin');
});

Route::get('/', [AuthController::class, 'login'])->name('login');
Route::get('/data-inventaris', [InventController::class, 'index'])->name('invent.index');
