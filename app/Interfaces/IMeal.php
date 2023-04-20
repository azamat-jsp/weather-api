<?php
namespace App\Interfaces;

use Illuminate\Support\Collection;

interface IMeal
{
    public function make(): Collection;
}
