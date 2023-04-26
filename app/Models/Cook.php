<?php
namespace App\Models;

class Cook
{
    public string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function MakeDinner(array $menu): void
    {
        foreach ($menu as $meal) {
            $meal->make();
        }
    }
}
