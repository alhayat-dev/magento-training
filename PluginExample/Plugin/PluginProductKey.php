<?php

namespace Training\PluginExample\Plugin;

use Magento\Catalog\Api\Data\ProductInterface;
use Training\PluginExample\Model\ProductKey;

class PluginProductKey
{
//    public function beforeGetKey(ProductKey $subject, ProductInterface $product, $prefix = 'Item'): array
//    {
//        $prefix = $product->getId() . ' - ' . $prefix;
//        return [$product, $prefix];
//    }

//    public function afterGetKey(ProductKey $subject, $result, ProductInterface $product, string $prefix = 'Item')
//    {
//        return $result . '--item from plugin--' . $product->getName();
//    }


    public function aroundGetKey(ProductKey $subject, callable $proceed, ProductInterface $product, string $prefix = 'Item'): string
    {
        $prefix .= $product->getId();
        $result = $proceed($product, $prefix);
        $result .= '--' . $product->getName();
        return $result;
    }
}
