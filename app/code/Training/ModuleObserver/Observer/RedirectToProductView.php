<?php

namespace Training\ModuleObserver\Observer;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\ActionFlag;
use Magento\Framework\App\Response\RedirectInterface;
use Magento\Framework\Event\Observer;
use Magento\Framework\Event\ObserverInterface;

class RedirectToProductView implements ObserverInterface
{
    /**
     * @var RedirectInterface
     */
    protected $redirect;

    /**
     * @var ActionFlag
     */
    protected $actionFlag;

    /**
     * @param RedirectInterface $redirect
     * @param ActionFlag $actionFlag
     */
    public function __construct(
        RedirectInterface $redirect,
        ActionFlag $actionFlag
    )
    {
        $this->redirect = $redirect;
        $this->actionFlag = $actionFlag;
    }

    /**
     * @param Observer $observer
     * @return $this
     */
    public function execute(Observer $observer)
    {
        $request = $observer->getEvent()->getData('request');
        if ($request->getModuleName() !== 'catalog' || $request->getControllerName() !== 'product') {
            $controller = $observer->getData( 'controller_action' );
            $this->actionFlag->set('', Action::FLAG_NO_DISPATCH, true);
            $this->redirect->redirect($controller->getResponse(), 'catalog/product/view/id/1');
        }

        return $this;
    }
}
