<?php
namespace App\Implementations;

use App\Interfaces\Builder;
use App\Models\Product1;

class ConcreteBuilder1 implements Builder
{
    private Product1 $product;
    /**
     * Новый экземпляр строителя должен содержать пустой объект продукта,
     * который используется в дальнейшей сборке.
     */
    public function __construct()
    {
        $this->reset();
    }

    private function reset(): void
    {
        $this->product = new Product1();
    }

    /**
     * Все этапы производства работают с одним и тем же экземпляром продукта.
     */
    public function producePartA(): void
    {
        $this->product->parts[] = "PartA1";
    }

    public function producePartB(): void
    {
        $this->product->parts[] = "PartB1";
    }

    public function producePartC(): void
    {
        $this->product->parts[] = "PartC1";
    }

    public function getProduct(): Product1
    {
        $result = $this->product;
        $this->reset();

        return $result;
    }
}
