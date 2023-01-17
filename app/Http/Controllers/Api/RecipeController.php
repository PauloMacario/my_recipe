<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\RecipeRequest;
use App\Services\RecipeService;
use Illuminate\Http\Request;

class RecipeController extends Controller
{   
    protected $recipeService;

    public function __construct(RecipeService $recipeService)
    {
        $this->recipeService = $recipeService;
    } 

    public function index()
    {
        $recipes = $this->recipeService->listAllRecipes();

        return response()->json($recipes);
    }

    public function recipesFull()
    {
        $recipes = $this->recipeService->listAllRecipesFull();

        return response()->json($recipes);
    }

    public function showFull($id)
    {
        $recipe = $this->recipeService->listRecipeFull($id);

        if (!$recipe) {
            return response()->json(["error" => "resource not found"], 404);
        }

        return response()->json($recipe);
    }

    public function show($id)
    {
        $recipe = $this->recipeService->listRecipe($id);

        if (!$recipe) {
            return response()->json(["error" => "resource not found"], 404);
        }

        return response()->json($recipe);
    }

    public function store(RecipeRequest $request)
    {
        $response = $this->recipeService->createRecipe($request->all());

        return response()->json($response);
    }

    public function update($id, RecipeRequest $request)
    {
        $response = $this->recipeService->updateRecipe($id, $request->all());

        return response()->json([
            "updated" => $response
        ]);
    }

    public function destroy($id)
    {
        $response = $this->recipeService->deleteRecipe($id);

        return response()->json([], 204);
    }
}
