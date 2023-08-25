<?php
namespace Perspective\Thema16ChangeProductPrice\Helper;

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
            'perspective/general/enabledt16ch',
            $scope
        );
    }


    public function getCategory($scope = ScopeConfigInterface::SCOPE_TYPE_DEFAULT)
    {
        return $this->scopeConfig->getValue(
            'perspective/general/Category',
            $scope
        );
    }

    public function getPriceReductionPercentage($scope = ScopeConfigInterface::SCOPE_TYPE_DEFAULT)
    {
        return $this->scopeConfig->getValue(
            'perspective/general/PriceReductionPercentage',
            $scope
        );
    }


    
}
