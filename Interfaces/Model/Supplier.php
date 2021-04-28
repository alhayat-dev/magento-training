<?php

namespace Training\Interfaces\Model;

use Training\Interfaces\Api\Data\SupplierInterface;

class Supplier implements SupplierInterface
{
    /**
     * @var $code
     */
    protected $code;

    /**
     * @param $code
     */
    public function setCode($code)
    {
        $this->code = $code;
    }

    /**
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }
}
