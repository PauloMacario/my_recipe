<?php

use App\Http\Controllers\Api\CategoryController;

Route::prefix('/categories')
->group(
    function () {
        Route::get('', [CategoryController::class, 'index'])
            ->name('categories_index');
            
        Route::post('', [CategoryController::class, 'store'])
            ->name('categories_store');

        Route::get('/{id}', [CategoryController::class, 'show'])
            ->name('categories_show');
        
        Route::put('/{id}', [CategoryController::class, 'update'])
            ->name('categories_update');

        Route::delete('/{id}', [CategoryController::class, 'destroy'])
            ->name('categories_delete');

    }
);