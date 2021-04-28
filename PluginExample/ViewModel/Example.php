<?php

declare(strict_types=1);

namespace Training\PluginExample\ViewModel;

use Magento\Catalog\Api\ProductRepositoryInterface;
use Magento\Framework\App\RequestInterface;
use Magento\Framework\View\Element\Block\ArgumentInterface;
use Training\PluginExample\Model\ProductKey;

class Example implements ArgumentInterface
{
    /**
     * @var ProductRepositoryInterface
     */
    protected $productRepository;
    /**
     * @var ProductKey
     */
    protected $productKey;

    public function __construct(
        ProductRepositoryInterface $productRepository,
        ProductKey $productKey
    ) {
        $this->productRepository = $productRepository;
        $this->productKey = $productKey;
    }

    /**
     * @param RequestInterface $request
     * @return string|null
     * @throws \Magento\Framework\Exception\NoSuchEntityException
     */
    public function getProductKey(RequestInterface $request)
    {
        $productId = $request->getParam('product_id');
        if (null !== $productId) {
            $product = $this->productRepository->getById($productId);
            return $this->productKey->getKey($product, 'Product');
        }
        return null;
    }
}
