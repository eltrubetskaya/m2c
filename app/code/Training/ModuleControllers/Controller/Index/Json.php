<?php
namespace Training\ModuleControllers\Controller\Index;

use Magento\Framework\App\Action\Context;

class Json extends \Magento\Framework\App\Action\Action
{
    public $jsonFactory;
    public function __construct(
        Context $context,
    \Magento\Framework\Controller\Result\JsonFactory $jsonFactory
    )
    {
        $this->jsonFactory = $jsonFactory;
        parent::__construct($context);

    }
    public function execute()
    {
        $result = $this->jsonFactory->create();
        $result->setPath('training_modulecontrollers/index/index');

        return $result;
    }
}
