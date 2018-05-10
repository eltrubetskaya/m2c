<?php

namespace Training\ModuleRouting\App;

use Magento\Framework\App\RequestInterface;
use Magento\Framework\App\Response\Http;
use Magento\Framework\App\ResponseInterface;
use Magento\Framework\App\RouterList;
use Magento\Framework\Controller\ResultInterface;
use Psr\Log\LoggerInterface;

class FrontController extends \Magento\Framework\App\FrontController
{
    /**
     * @var RouterList
     */
    protected $routerList;

    /**
     * @var Http
     */
    protected $response;

    /**
     * @var LoggerInterface
     */
    protected $logger;

    /**
     * @param RouterList $routerList
     * @param Http $response
     * @param LoggerInterface $logger
     */
    public function __construct(
        RouterList $routerList,
        Http $response,
        LoggerInterface $logger
    )
    {
        $this->routerList = $routerList;
        $this->response = $response;
        $this->logger = $logger;

        parent::__construct($routerList, $response);
    }

    /**
     * @param RequestInterface $request
     * @return ResponseInterface|ResultInterface
     */
    public function dispatch(RequestInterface $request)
    {
        foreach ($this->routerList as $router) {
            $this->logger->info(get_class($router));
        }

        return parent::dispatch($request);
    }
}
