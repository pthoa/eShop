<?php
/**
 * Copyright © 2016 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace TMA\Catalog\Block\Review\Product\View;

/**
 * Detailed Product Reviews
 *
 * @author      Magento Core Team <core@magentocommerce.com>
 */
class ListView extends \Magento\Review\Block\Product\View\ListView
{
	public function get_star_from_pecent($pecent)
	{
		return $pecent/100*5;
	}
}