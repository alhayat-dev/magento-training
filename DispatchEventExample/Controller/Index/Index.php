<?php

namespace Training\DispatchEventExample\Controller\Index;

use Magento\Framework\App\ActionInterface;
use Magento\Framework\App\ResponseInterface;
use Magento\Framework\Event\ManagerInterface;
use Magento\Framework\View\Result\PageFactory;

class Index implements ActionInterface
{

    /**
     * @var PageFactory $pageFactory
     */
    private $pageFactory;

    /**
     * @var ManagerInterface $eventManager
     */
    private $eventManager;

    /**
     * Index constructor.
     * @param ManagerInterface $eventManager
     * @param PageFactory $pageFactory
     */
    public function __construct(
        ManagerInterface $eventManager,
        PageFactory $pageFactory
    ) {
        $this->pageFactory = $pageFactory;
        $this->eventManager = $eventManager;
    }//end __construct()

    /**
     * @return ResponseInterface|\Magento\Framework\Controller\ResultInterface|\Magento\Framework\View\Result\Page
     */
    public function execute()
    {
        $resultPage = $this->pageFactory->create();
        $resultPage->getConfig()->getTitle()->set('Dispatch Event Example...');
        $this->eventManager->dispatch('dispatch_event_example', ['page' => $resultPage]);
        return $resultPage;
    }//end execute()
}//end class
