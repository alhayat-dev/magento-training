<?php


namespace Training\Interfaces\Controller\Index;


use Magento\Framework\App\ActionInterface;
use Magento\Framework\App\ResponseInterface;
use Magento\Framework\View\Result\PageFactory;

class Index implements ActionInterface
{

    /**
     * @var PageFactory $pageFactory
     */
    private $pageFactory;


    /**
     * Index constructor.
     *
     * @param PageFactory $pageFactory
     */
    public function __construct(PageFactory $pageFactory)
    {
        $this->pageFactory = $pageFactory;

    }//end __construct()


    /**
     * @return ResponseInterface|\Magento\Framework\Controller\ResultInterface|\Magento\Framework\View\Result\Page
     */
    public function execute()
    {
        $resultPage = $this->pageFactory->create();
        $resultPage->getConfig()->getTitle()->set('Constructor with Interfaces in Magento 2');
        return $resultPage;

    }//end execute()


}//end class
