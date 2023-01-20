<?php

use App\Http\Controllers\Spa\RecipeController;


Route::prefix('/recipes')
->group(
    function () {
        Route::get('', [RecipeController::class, 'index'])
            ->name('spa_recipes_index');

        Route::get('full', [RecipeController::class, 'recipesFull'])
            ->name('spa_recipes_recipesfull');
            
        Route::post('', [RecipeController::class, 'store'])
            ->name('spa_recipes_store');

        Route::get('/{id}', [RecipeController::class, 'show'])
            ->name('spa_recipes_show');

        Route::get('/full/{id}', [RecipeController::class, 'showFull'])
            ->name('spa_recipes_show');
        
        Route::put('/{id}', [RecipeController::class, 'update'])
            ->name('spa_recipes_update');

        Route::delete('/{id}', [RecipeController::class, 'destroy'])
            ->name('spa_recipes_delete');

    }
);