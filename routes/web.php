<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\ExportController;

Route::get('/', function () { return view('home');});

Route::controller(UserController::class)->group(function () {
    Route::get('userdashboard', 'dashboard')->name('user.userdashboard');
    Route::get('createuser', 'createuser')->name('user.create');
    Route::post('storeuser', 'storeuser')->name('user.store');
});

Route::controller(TaskController::class)->group(function () {
    Route::get('taskdashboard', 'taskdashboard')->name('task.dashboard');
    Route::get('createtask', 'getusername')->name('task.create');
    Route::post('storetask', 'storetask')->name('task.store');
});

Route::get('export-users-tasks', [ExportController::class, 'exportInExcel'])->name('export');
