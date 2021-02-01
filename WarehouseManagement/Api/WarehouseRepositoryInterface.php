<?php


namespace Training\WarehouseManagement\Api;


use Magento\Framework\DataObject;

interface WarehouseRepositoryInterface
{
    public function newWarehouse($code): DataObject;
}
