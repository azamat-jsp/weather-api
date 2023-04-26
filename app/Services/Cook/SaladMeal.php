<?php

namespace App\Services\Cook;

use App\abstracts\MealBase;

class SaladMeal extends MealBase
{
    public function cook(): void
    {
        echo "Нарезаем помидоры и огурцы\n";
        echo "Посыпаем зеленью, солью и специями\n";
    }

    public function prepare(): void
    {
        echo "Моем помидоры и огурцы\n";
    }

    public function finalSteps(): void
    {
        echo "Поливаем подсолнечным маслом\n";
        echo "Салат готов\n";
    }
}
