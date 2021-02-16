<?php

declare(strict_types=1);

namespace Training\DispatchEventExample\Block;

use Magento\Framework\View\Element\Template;

class Example extends Template
{
    protected function _toHtml()
    {
        return 'This is the example from dispatch event tutorial..';
    }
}
