<?php

namespace Training\Test\MagentoU;

use Magento\Catalog\Api\ProductRepositoryInterface;
use Magento\Catalog\Model\ProductFactory;
use Magento\Checkout\Model\Session;

class Test
{
    /**
     * @var ProductRepositoryInterface
     */
    protected $productRepository;

    /**
     * @var ProductFactory
     */
    protected $productFactory;

    /**
     * @var Session
     */
    protected $session;
//    /**
//     * @var \Training\Test\Api\ProductRepositoryInterface
//     */
//    protected $testProductRepository;

    /**
     * @var string
     */
    protected $justAParameter;

    /**
     * @var array
     */
    protected $data;

    /**
     * @param ProductRepositoryInterface $productRepository
     * @param ProductFactory $productFactory
     * @param Session $session
     * @param string $justAParameter
     * @param array $data
     */
    public function __construct(
        ProductRepositoryInterface $productRepository,
        ProductFactory $productFactory,
        Session $session,
//        \Training\Test\Api\ProductRepositoryInterface $testProductRepository,
        $justAParameter = '',
        array $data
    )
    {
        $this->productRepository = $productRepository;
        $this->productFactory = $productFactory;
        $this->session = $session;
//        $this->testProductRepository = $testProductRepository;
        $this->justAParameter = $justAParameter;
        $this->data = $data;
    }

    public function log()
    {
        echo get_class($this->productRepository).'<br/>';
        echo get_class($this->productFactory).'<br/>';
        echo get_class($this->session).'<br/>';
//        echo get_class($this->testProductRepository).'<br/>';
        echo $this->justAParameter .'<br/>';
        echo print_r($this->data).'<br/>';
    }
}
