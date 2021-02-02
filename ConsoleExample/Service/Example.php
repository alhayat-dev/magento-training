<?php

declare(strict_types=1);

namespace Training\ConsoleExample\Service;


use Magento\Catalog\Model\ProductRepository;
use Training\ConsoleExample\Model\ProductKey;

class Example
{
    /**
     * @var ProductRepository
     */
    protected ProductRepository $productRepository;

    /**
     * @var ProductKey
     */
    protected ProductKey $productKey;

    public function __construct(
        ProductRepository $productRepository,
        ProductKey $productKey
    ) {
        $this->productRepository = $productRepository;
        $this->productKey = $productKey;
    }

    public function getProductKey(int $productId, string $productPrefix): string
    {
        $product = $this->productRepository->getById($productId);
        return $this->productKey->getKey($product, $productPrefix);
    }
}
