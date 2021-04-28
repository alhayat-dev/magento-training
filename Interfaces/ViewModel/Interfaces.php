<?php

namespace Training\Interfaces\ViewModel;

use Magento\Framework\View\Element\Block\ArgumentInterface;
use Training\Interfaces\Api\SupplierRepositoryInterface;


class Interfaces implements ArgumentInterface
{
    /**
     * @var SupplierRepositoryInterface $supplierRepository
     */
    protected $supplierRepository;

    public function __construct(SupplierRepositoryInterface $supplierRepository)
    {

        $this->supplierRepository = $supplierRepository;
    }

    public function getSupplierCode()
    {
        return $this->supplierRepository->createNew("ABC-123")->getCode();
    }
}
