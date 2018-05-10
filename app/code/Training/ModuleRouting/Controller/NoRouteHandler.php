<?php

namespace Training\ModuleRouting\Controller;

use Magento\Framework\App\RequestInterface;
use Magento\Framework\App\Router\NoRouteHandlerInterface;

class NoRouteHandler implements NoRouteHandlerInterface
{
    /**
     * Check and process no route request
     *
     * @param RequestInterface $request
     * @return bool
     */
    public function process(RequestInterface $request)
    {
        $moduleName = 'cms';
        $controllerName = 'index';
        $actionName = 'index';

        $request
            ->setModuleName($moduleName)
            ->setControllerName($controllerName)
            ->setActionName($actionName)
        ;

        return true;
    }
}
