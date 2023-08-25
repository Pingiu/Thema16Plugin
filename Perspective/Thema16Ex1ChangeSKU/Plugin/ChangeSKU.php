<?php
namespace Perspective\Thema16Ex1ChangeSKU\Plugin;

class ChangeSKU
{
    public function afterGetSku(\Magento\Catalog\Model\Product $subject, $result)
    {
        
        $sku = $subject->getId()."-".$result;

        return $sku ; 
    }
}
