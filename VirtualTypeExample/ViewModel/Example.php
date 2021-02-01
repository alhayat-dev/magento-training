<?php

namespace Training\VirtualTypeExample\ViewModel;

use Magento\Framework\App\RequestInterface;
use Magento\Framework\View\Element\Block\ArgumentInterface;
use Training\WarehouseManagement\Api\WarehouseRepositoryInterface;

class Example implements ArgumentInterface
{
    /**
     * @var WarehouseRepositoryInterface
     */
    protected $warehouseRepository;

    public function __construct(WarehouseRepositoryInterface $warehouseRepository)
    {
        $this->warehouseRepository = $warehouseRepository;
    }

    public function getWarehouse(RequestInterface $request)
    {
        return $this->warehouseRepository->newWarehouse((string)$request->getParam('code'));
    }
}
