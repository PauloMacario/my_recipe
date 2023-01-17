<?php

use App\Http\Controllers\Api\RecipeController;

Route::prefix('/recipes')
->group(
    function () {
        Route::get('', [RecipeController::class, 'index'])
            ->name('recipes_index');

        Route::get('full', [RecipeController::class, 'recipesFull'])
            ->name('recipes_recipesfull');
            
        Route::post('', [RecipeController::class, 'store'])
            ->name('recipes_store');

        Route::get('/{id}', [RecipeController::class, 'show'])
            ->name('recipes_show');

        Route::get('/full/{id}', [RecipeController::class, 'showFull'])
            ->name('recipes_show');
        
        Route::put('/{id}', [RecipeController::class, 'update'])
            ->name('recipes_update');

        Route::delete('/{id}', [RecipeController::class, 'destroy'])
            ->name('recipes_delete');

    }
);