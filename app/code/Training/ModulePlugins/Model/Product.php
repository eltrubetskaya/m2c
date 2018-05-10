<?php

namespace Training\ModulePlugins\Model;

class Product extends \Magento\Catalog\Model\Product
{
    public function getPrice()
    {
        return parent::getPrice();
    }
}
