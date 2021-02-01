<?php

namespace Training\ReplaceConstructorArguments\ViewModel;

use Magento\Framework\View\Element\Block\ArgumentInterface;
use Training\ReplaceConstructorArguments\Model\DefaultName;

class Example implements ArgumentInterface
{
    /**
     * @var DefaultName $defaultName
     */
    protected $defaultName;

    public function __construct(DefaultName $defaultName)
    {
        $this->defaultName = $defaultName;
    }

    public function getName(): string
    {
        return $this->defaultName->getName();
    }
}
