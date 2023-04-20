<?php
namespace App\Implementations\Meal;

use App\Interfaces\IMeal;
use Illuminate\Support\Collection;

class PotatoMeal implements IMeal
{
    public function Make(): Collection
    {
        $data = collect();
        $data->add('Чистим картошку');
        $data->add('Ставим почищенную картошку на огонь');
        $data->add('Сливаем остатки воды, разминаем варенный картофель в пюре');
        $data->add('Посыпаем пюре специями и зеленью');
        $data->add('Картофельное пюре готово');

        return $data;
    }
}
