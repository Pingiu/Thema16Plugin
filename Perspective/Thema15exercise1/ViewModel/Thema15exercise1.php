<?php
namespace Perspective\Thema15exercise1\ViewModel;
use Magento\Framework\View\Element\Block\ArgumentInterface;
use Perspective\Thema15exercise1\Helper\Data;

class Thema15exercise1 implements ArgumentInterface
{
    /**
     * @var \Magento\Framework\Registry 
     */
    private $_registry;
    protected $helper;

    public function __construct(
        \Magento\Framework\Registry  $registry,
        Data $helper  
    )
    {
        $this->_registry = $registry;
        $this->helper = $helper;
        
    }

    public function getCurrentProduct()
    {
        return $this->_registry->registry('current_product');
    }

    public function isEnabled()
    {
        return $this->helper->isEnabled();
    }

    public function getDiscount()
    {
        return $this->helper->getDiscount();
    }
}
