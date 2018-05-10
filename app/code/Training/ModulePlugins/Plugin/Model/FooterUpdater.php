<?php

namespace Training\ModulePlugins\Plugin\Model;

class FooterUpdater
{
    public function afterGetCopyright(\Magento\Theme\Block\Html\Footer $subject, $result)
    {
        return 'Customized copyright!';
    }
}
