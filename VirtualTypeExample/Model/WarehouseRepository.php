<?php

namespace Training\VirtualTypeExample\Model;

use Magento\Framework\DataObject;

class WarehouseRepository extends \Training\WarehouseManagement\Model\WarehouseRepository
{
    public function __construct(WarehouseManagementExtended $warehouseManagement)
    {
        parent::__construct($warehouseManagement);
    }

    public function newWarehouse($code): DataObject
    {
        if (in_array($code, $this->warehouseManagement->getDiscontinuedWarehouses())) {
            throw new \Exception("This warehouse no longer exist");
        }
        return parent::newWarehouse($code);
    }
}
