<?php
namespace Perspective\Thema16Ex2ChangeCourse\Plugin;

class ChangeCourse
{
    /**
     * @var  \Magento\Directory\Model\CurrencyFactory 
     */
    private $currencyFactory;

    public function __construct(
         \Magento\Directory\Model\CurrencyFactory  $currencyFactory
    )
    {
        $this->currencyFactory = $currencyFactory; 
    }

    public function convertPrice($price, $currencyCodeFrom, $currencyCodeTo)
    {
        $rate = $this->currencyFactory->create()
            ->load($currencyCodeFrom)
            ->getAnyRate($currencyCodeTo);

        $convertedPrice = $price*($rate+(0.1 * $rate));

        return $convertedPrice;
    }

    public function afterGetPrice(\Magento\Catalog\Model\Product $subject, $result)
    {
        $result = $this->convertPrice($result, 'USD','USD');

        return $result ; 
    }
}
