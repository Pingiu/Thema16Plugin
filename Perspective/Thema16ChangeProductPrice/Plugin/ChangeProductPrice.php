<?php
namespace Perspective\Thema16ChangeProductPrice\Plugin;
use Perspective\Thema16ChangeProductPrice\Helper\Data;
class ChangeProductPrice
{
    /**
     * @var Data
     */
    protected $helper;

    public function __construct(
        Data $helper,
    ) {
        $this->helper = $helper;
    }

    public function getCategory()
    {
        return $this->helper->getCategory();
    }

    public function getPriceReductionPercentage()
    {
        return $this->helper->getPriceReductionPercentage();
    }

    public function getIdArray ()
    {
        $categoryTitle = $this->getCategory();
        $categoryTitle = explode(",", $categoryTitle);
        return $categoryTitle;
    }

    public function afterGetPrice(\Magento\Catalog\Model\Product $subject, $result)
    {
        foreach ($this->getIdArray() as $categoryId)
        {
            if ($subject->getCategoryId() == $categoryId){

                $tempPercent = $this->getPriceReductionPercentage() / 100;
                $Percent = $result * $tempPercent;

                return $result - $Percent;
            }
        }

        return $result; 
    }
}
