<?php

namespace App\Services\Builder;

use App\Implementations\ConcreteBuilder1;
use Illuminate\Http\JsonResponse;

class GetProductListAction
{
    public function __invoke(Director $director): JsonResponse
    {
        $builder = new ConcreteBuilder1();
        $director->setBuilder($builder);
        $director->buildMinimalViableProduct();
        $minimalViableProduct = $builder->getProduct()->listParts();

        $director->buildFullFeaturedProduct();
        $fullFeaturedProduct = $builder->getProduct()->listParts();

        $builder->producePartA();
        $builder->producePartC();
        $customProduct = $builder->getProduct()->listParts();

        return response()->json([
            'success' => true,
            'standard' => [
                'message' => 'Standard basic product',
                'data' => $minimalViableProduct,
            ],
            'full' => [
                'message' => 'Standard full featured product',
                'data' => $fullFeaturedProduct,
            ],
            'custom' => [
                'message' => 'Custom product',
                'data' => $customProduct,
            ],
        ]);
    }
}
