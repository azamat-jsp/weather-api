<?php

namespace App\Services\Cook;

use App\Models\Cook;

class MealAction
{
    public function __invoke(): void
    {
        $bob = new Cook("Bob");
        $bob->MakeDinner([new PotatoMeal(), new SaladMeal()]);
    }
}
