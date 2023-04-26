<?php

namespace App\abstracts;

abstract class MealBase
{
    public function make(): void
    {
        $this->prepare();
        $this->cook();
        $this->finalSteps();
    }

    protected abstract function prepare(): void;
    protected abstract function cook(): void;
    protected abstract function finalSteps(): void;
}
