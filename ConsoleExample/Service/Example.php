<?php

declare(strict_types=1);

namespace Training\ConsoleExample\Service;

use Magento\Catalog\Model\ProductRepository;
use Training\ConsoleExample\Model\ProductKey;

class Example
{
    /**
     * @var ProductRepository $productRepository
     */
    protected $productRepository;

    /**
     * @var ProductKey $productKey
     */
    protected $productKey;

    /**
     * Example constructor.
     * @param ProductRepository $productRepository
     * @param ProductKey $productKey
     */
    public function __construct(
        ProductRepository $productRepository,
        ProductKey $productKey
    ) {
        $this->productRepository = $productRepository;
        $this->productKey = $productKey;
    }

    /**
     * @param int $productId
     * @param string $productPrefix
     * @return string
     * @throws \Magento\Framework\Exception\NoSuchEntityException
     */
    public function getProductKey(int $productId, string $productPrefix)
    {
        $product = $this->productRepository->getById($productId);
        return $this->productKey->getKey($product, $productPrefix);
    }
}
