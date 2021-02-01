<?php


namespace Training\WarehouseManagement\Api\Data;


interface WarehouseManagementInterface
{
    public function getWarehouseInfo($code): array;
}
