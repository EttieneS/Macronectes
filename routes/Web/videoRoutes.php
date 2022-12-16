<?php
    use App\Http\Controllers\VideoController;
    
    Route::get('', [\App\Http\Controllers\VideoController::class, 'index'])->name('index');
    Route::get('watch/{name}', [\App\Http\Controllers\VideoController::class, 'watch'])->name('watch');    
    Route::get('uploadview', [\App\Http\Controllers\VideoController::class, 'uploadview'])->name('uploadview');
    Route::post('upload', [\App\Http\Controllers\VideoController::class, 'upload'])->name('upload');
?> 