<?php

namespace App\Services\Cook;

use App\abstracts\MealBase;

class PotatoMeal extends MealBase
{
    public function cook(): void
    {
        echo "Ставим почищенную картошку на огонь\n";
        echo "Варим около 30 минут\n";
        echo "Сливаем остатки воды, разминаем варенный картофель в пюре\n";
    }

    public function prepare(): void
    {
        echo "Чистим и моем картошку\n";
    }

    public function finalSteps(): void
    {
        echo "Посыпаем пюре специями и зеленью\n";
        echo "Картофельное пюре готово\n\n";
    }
}
