<?php

declare(strict_types=1);

namespace Training\Preferences\Model;

use Training\Preferences\Api\Data\ItemInterface;

class Item implements ItemInterface
{
    /**
     * @var $code
     */
    protected $code;

    /**
     * @param string $code
     * @return ItemInterface
     */
    public function setCode(string $code): ItemInterface
    {
        $this->code = $code;
        return $this;
    }

    /**
     * @return string
     * @throws \Exception
     */
    public function getCode(): string
    {
        $warehouses = $this->getWarehouses(); // array aof all warehouses
        $totalWarehouses = count($warehouses); // total number of warehouses
        $id = random_int(0, $totalWarehouses - 1);
        $warehouseCode = $this->getWarehouses()[$id];
        return $warehouseCode . '_' . $this->code;
    }

    /**
     * @return string[]
     */
    protected function getWarehouses(): array
    {
        return [
            'LON',
            'MAN',
            'BIRM'
        ];
    }
}
