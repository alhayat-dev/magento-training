<?php

declare(strict_types=1);

namespace Training\ConsoleExample\Model;


use Magento\Catalog\Api\Data\ProductInterface;

class ProductKey
{
    /**
     * @param ProductInterface $product
     * @param string $prefix
     * @return string
     */
    public function getKey(ProductInterface $product, string $prefix)
    {
        return sprintf('%s-%s', $prefix, $product->getSku());
    }
}
