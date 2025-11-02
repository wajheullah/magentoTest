<?php
namespace Vendor\ProductBadge\Block;

use Magento\Framework\View\Element\Template;
use Magento\Framework\Registry;

class ProductBadge extends Template
{
    protected $registry;

    public function __construct(Template\Context $context, Registry $registry, array $data = [])
    {
        $this->registry = $registry;
        parent::__construct($context, $data);
    }

    public function getBadgeText()
    {
        $product = $this->registry->registry('current_product');
        if ($product) {
            return $product->getCustomBadge(); // returns the attribute we created
        }
        return '';
    }
}
