<?php

namespace Training\Routerlogger\Controller\Index;

use Magento\Framework\App\ActionInterface;
use Magento\Framework\App\RouterList;

class Index implements ActionInterface
{

    /**
     * @var RouterList
     */
    protected $_routerList;

    /**
     * @param RouterList $routerList
     */
    public function __construct(
        RouterList $routerList
    ) {
        $this->_routerList = $routerList;
    }

    /**
     * say hello text
     */
    public function execute()
    {
        var_dump($this->getRoutersString());
        die("All routers have been printed");
    }

    protected function getRoutersString()
    {
        $ret = '';
        foreach ($this->_routerList as $router) {
            $ret .= get_class($router) . "\n";
        }
        return $ret;
    }
}
