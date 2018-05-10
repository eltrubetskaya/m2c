<?php

namespace Training\ModuleController\Controller\Product;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\ResponseInterface;

class View extends Action
{
    /**
     * Execute action based on request and return result
     *
     * Note: Request will be added as operation argument in future
     *
     * @return \Magento\Framework\Controller\ResultInterface|ResponseInterface
     * @throws \Magento\Framework\Exception\NotFoundException
     */
    public function execute()
    {
        echo 'One'; exit();
    }

    public function beforeExecute()
    {
//        echo 'Before <br>'; exit();
    }

    public function afterExecute(\Magento\Catalog\Controller\Product\View $controller, $result)
    {
//        echo 'After <br>'; exit();
    }
}
