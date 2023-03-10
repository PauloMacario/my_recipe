<?php

use App\Http\Controllers\Api\RecipeController;

Route::prefix('/recipes')
->group(
    function () {
        Route::get('', [RecipeController::class, 'index'])
            ->name('api_recipes_index');

        Route::get('full', [RecipeController::class, 'recipesFull'])
            ->name('api_recipes_recipesfull');
            
        Route::post('', [RecipeController::class, 'store'])
            ->name('api_recipes_store');

        Route::get('/{id}', [RecipeController::class, 'show'])
            ->name('api_recipes_show');

        Route::get('/full/{id}', [RecipeController::class, 'showFull'])
            ->name('api_recipes_show');
        
        Route::put('/{id}', [RecipeController::class, 'update'])
            ->name('api_recipes_update');

        Route::delete('/{id}', [RecipeController::class, 'destroy'])
            ->name('api_recipes_delete');

    }
);