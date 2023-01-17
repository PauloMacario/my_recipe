<?php

namespace App\Services;

use App\Repositories\RecipeRepository;

class RecipeService
{
    protected $repository;

    public function __construct(RecipeRepository $repository)
    {
        $this->repository = $repository;
    }

    public function listAllRecipes()
    {
        return $this->repository->getAllRecipes();
    }
    
    public function listAllRecipesFull()
    {
        return $this->repository->getAllRecipesFull();
    }

    public function listRecipe(int $id)
    {
        return $this->repository->getRecipe($id);
    }

    public function listRecipeFull(int $id)
    {
        return $this->repository->getRecipeFull($id);
    }

    public function createRecipe(array $data)
    {
        return $this->repository->newRecipe($data);
    }

    public function updateRecipe(int $id, array $data)
    {
        return $this->repository->updateRecipe($id, $data);
    }

    public function deleteRecipe(int $id)
    {
        return $this->repository->deleteRecipe($id);
    }
}