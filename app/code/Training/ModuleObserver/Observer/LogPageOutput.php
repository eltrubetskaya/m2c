<?php

namespace Training\ModuleObserver\Observer;

use Magento\Framework\Event\Observer;
use Psr\Log\LoggerInterface;

class LogPageOutput implements \Magento\Framework\Event\ObserverInterface
{
    /**
     * @var LoggerInterface
     */
    protected $logger;

    /**
     * @param LoggerInterface $logger
     */
    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }

    /**
     * @param Observer $observer
     * @return LogPageOutput
     */
    public function execute(Observer $observer)
    {
        $response = $observer->getEvent()->getData('response');
        $body = $response->getBody();
        $this->logger->info('-------------\n\n\n BODY \n\n\n' . $body);

        return $this;
    }
}
