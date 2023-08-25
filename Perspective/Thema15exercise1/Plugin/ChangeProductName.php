<?php
namespace Perspective\Thema15exercise1\Plugin;

class ChangeProductName
{

    public function afterGetName(\Magento\Catalog\Model\Product $subject, $result)
    {
        if ($subject->getData('Social'))
        {
          return $result." - SOCIAL!!!";   
        }
        else return $result; 
        
    }
}
