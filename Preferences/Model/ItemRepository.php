<?php

namespace Training\Preferences\Model;

use Training\Preferences\Api\Data\ItemInterface;
use Training\Preferences\Api\Data\ItemInterfaceFactory;
use Training\Preferences\Api\ItemRepositoryInterface;

class ItemRepository implements ItemRepositoryInterface
{

    /**
     * @var ItemInterfaceFactory $itemFactory
     */
    protected $itemFactory;

    /**
     * ItemRepository constructor.
     * @param ItemInterfaceFactory $itemFactory
     */
    public function __construct(ItemInterfaceFactory $itemFactory)
    {
        $this->itemFactory = $itemFactory;
    }

    /**
     * @param string $code
     * @return ItemInterface
     */
    public function newItem(string $code): ItemInterface
    {
        return $this->itemFactory->create()->setCode($code);
    }
}
