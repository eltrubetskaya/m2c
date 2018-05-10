<?php

namespace Training\ModulePlugins\Plugin\Model;

class BreadcrumbsUpdater
{
    public function beforeAddCrumb(\Magento\Theme\Block\Html\Breadcrumbs $subject, $crumbName, $crumbInfo)
    {
        $crumbInfo['label'] = $crumbName . '(!)';

        return [$crumbName, $crumbInfo];
    }
}
