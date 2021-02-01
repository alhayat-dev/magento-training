<?php


namespace Training\Interfaces\Model;


use Training\Interfaces\Api\Data\SupplierInterface;
use Training\Interfaces\Api\Data\SupplierInterfaceFactory;
use Training\Interfaces\Api\SupplierRepositoryInterface;

class SupplierRepository implements SupplierRepositoryInterface
{

    /**
     * @var SupplierInterfaceFactory $supplierFactory
     */
    protected $supplierFactory;
    /**
     * @var CodeValidationInterface
     */
    protected $codeValidation;

    public function __construct(SupplierInterfaceFactory $supplierFactory, CodeValidationInterface $codeValidation)
    {
        $this->supplierFactory = $supplierFactory;
        $this->codeValidation = $codeValidation;
    }

    /**
     * @param $code
     * @return SupplierInterface
     */
    public function createNew($code): SupplierInterface
    {
        $this->codeValidation->validate($code);
        $supplier = $this->supplierFactory->create();
        $supplier->setCode($code);
        return $supplier;
    }
}
