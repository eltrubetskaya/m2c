<?php

namespace Training\ModulePlugins\Plugin\Model;

class ProductAttributesUpdater
{
    public function afterGetPrice(\Magento\Catalog\Model\Product $subject, $result)
    {
        return $result * 2;
    }
}
