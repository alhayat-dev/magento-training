<?php

namespace Training\WarehouseManagement\Model;

use Magento\Framework\DataObject;
use Training\WarehouseManagement\Api\Data\WarehouseManagementInterface;
use Training\WarehouseManagement\Api\WarehouseRepositoryInterface;

class WarehouseRepository implements WarehouseRepositoryInterface
{
    /**
     * @var WarehouseManagementInterface
     */
    protected $warehouseManagement;

    public function __construct(WarehouseManagementInterface $warehouseManagement)
    {
        $this->warehouseManagement = $warehouseManagement;
    }

    public function newWarehouse($code): DataObject
    {
        return new DataObject($this->warehouseManagement->getWarehouseInfo($code));
    }
}
