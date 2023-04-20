<?php
namespace App\Services;

use App\Implementations\Meal\PotatoMeal;
use App\Implementations\Meal\SaladMeal;
use App\Models\Cook;
use Illuminate\Support\Collection;

class CookService
{
    public function __invoke(array $params): Collection
    {
        $name = $params['name'];
        $cook = new Cook();

        $data = collect();

        $data->put('name', $name);
        $data->put('potato', $cook->makeDinner(new PotatoMeal()));
        $data->put('salad', $cook->makeDinner(new SaladMeal()));

        return $data;
    }
}
