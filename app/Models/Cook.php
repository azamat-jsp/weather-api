<?php

namespace App\Models;

use App\Interfaces\IMeal;
use Illuminate\Support\Collection;

class Cook
{
    public function makeDinner(IMeal $meal): Collection
    {
        return $meal->make();
    }
}
