<?php

namespace TMA\Catalog\Block\Product\View;

use Magento\Catalog\Block\Product\AbstractProduct;
use Magento\Framework\View\Element\Template;
use Magento\Framework\View\Result\PageFactory;
class Extra extends Template
{

    protected $discountCategorieCollection;

    protected $categoryHelper;

    protected $categoryFactory;

    protected $registry;

    public function __construct(Template\Context $context,
                                \Magento\Catalog\Model\CategoryFactory $categoryFactory,
                                \Magento\Catalog\Helper\Category $categoryHelper,
                                \Magento\Framework\Registry $registry,
                                array $data = [])
    {
        $this->categoryFactory = $categoryFactory;
        $this->categoryHelper = $categoryHelper;
        $this->registry = $registry;
        parent::__construct($context, $data);
    }
    public function getProduct()
    {
    	return $this->categoryHelper->getTuanhuy();
    }

}