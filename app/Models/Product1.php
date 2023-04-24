<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product1 extends Model
{
    public array $parts = [];

    public function listParts(): array
    {
        return $this->parts;
    }
}
