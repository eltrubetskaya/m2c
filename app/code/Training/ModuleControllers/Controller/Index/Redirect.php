<?php
namespace Training\ModuleControllers\Controller\Index;

class Redirect extends \Magento\Framework\App\Action\Action
{
    public function execute()
    {
        $result = $this->resultRedirectFactory->create();
        $result->setPath('training_modulecontrollers/index/index');

        return $result;
    }
}
