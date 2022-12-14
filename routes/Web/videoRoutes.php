<?php
use App\Http\Controllers\UserController;

    Route::get('index', [\App\Http\Controllers\VideoController::class, 'index'])->name('index');
    // Route::get('getall', [\App\Http\Controllers\UserController::class, 'getall'])->name('getall');
    Route::get('createview', [\App\Http\Controllers\UserController::class, 'createview'])->name('createview');
    Route::post('create', [\App\Http\Controllers\UserController::class, 'create'])->name('create');
?> 