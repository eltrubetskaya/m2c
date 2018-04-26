<?php
namespace Training\ModuleControllers\Controller\Index;

class Index extends \Magento\Framework\App\Action\Action
{
    public function execute()
    {
        echo $this->_url->getUrl('customer/account/login');
        echo $this->_url->getUrl('catalog/product/view', ['id' => 111, '_query' => ['a' => 1]]);
        exit();
    }
}
