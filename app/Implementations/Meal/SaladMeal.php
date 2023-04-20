<?php
namespace App\Implementations\Meal;

use App\Interfaces\IMeal;
use Illuminate\Support\Collection;

class SaladMeal implements IMeal
{
    public function Make(): Collection
    {
        $data = collect();
        $data->add('Нарезаем помидоры и огурцы');
        $data->add('Посыпаем зеленью, солью и специями');
        $data->add('Поливаем подсолнечным маслом');
        $data->add('Салат готов');

        return $data;
    }
}
