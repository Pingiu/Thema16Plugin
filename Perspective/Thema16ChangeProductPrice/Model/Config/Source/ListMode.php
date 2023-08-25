<?php
namespace Perspective\Thema16ChangeProductPrice\Model\Config\Source;

class ListMode implements \Magento\Framework\Data\OptionSourceInterface
{
 public function toOptionArray()
 {
  return [
    ['value' => '23', 'label' => __('Jackets')],
    ['value' => '24', 'label' => __('Hoodies & Sweatshirts')],
    ['value' => '25', 'label' => __('Tees')],
    ['value' => '26', 'label' => __('Bras & Tanks')],
  ];
 }
}
