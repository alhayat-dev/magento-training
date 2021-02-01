<?php


namespace Training\Interfaces\Api;


use Training\Interfaces\Api\Data\SupplierInterface;

interface SupplierRepositoryInterface
{
    public function createNew($code): SupplierInterface;
}
