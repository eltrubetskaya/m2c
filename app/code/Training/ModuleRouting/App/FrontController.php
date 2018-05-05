<?php

namespace Training\ModuleRouting\App;

use Magento\Framework\App\Response\Http;
use Magento\Framework\App\RouterList;
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

    }
}
