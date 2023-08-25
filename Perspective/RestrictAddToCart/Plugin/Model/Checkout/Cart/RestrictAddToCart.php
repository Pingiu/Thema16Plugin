<?php
namespace Perspective\RestrictAddToCart\Plugin\Model\Checkout\Cart;

use Magento\Framework\Exception\LocalizedException;

class RestrictAddToCart
{
 public function beforeAddProduct(\Magento\Checkout\Model\Cart $subject, $productInfo, $requestInfo = null)
 {

 try {

      $qty = $requestInfo['qty'];

        if ($qty < 3) {
          throw new LocalizedException(__('Could not add Product to Cart'));
      }
      
         
 } catch (\Exception $e) {
 throw new LocalizedException(__($e->getMessage()));
 }

 return [$productInfo, $requestInfo];
 }
 
}