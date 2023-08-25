<?php
namespace Perspective\Thema15exercise1\Helper;

use Magento\Framework\App\Helper\AbstractHelper;
use Magento\Framework\App\Helper\Context;
use Magento\Framework\App\Config\ScopeConfigInterface;


class Data extends AbstractHelper
{
    public function __construct(
        Context $context
    )
    {
        parent::__construct($context);
    }
    public function isEnabled($scope = ScopeConfigInterface::SCOPE_TYPE_DEFAULT)
    {
        return $this->scopeConfig->isSetFlag(
            'perspective/general/enabled',
            $scope
        );
    }


    public function getDiscount($scope = ScopeConfigInterface::SCOPE_TYPE_DEFAULT)
    {
        return $this->scopeConfig->getValue(
            'perspective/general/discount',
            $scope
        );
    }


    
}
