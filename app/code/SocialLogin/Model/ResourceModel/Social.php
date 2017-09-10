<?php
/**
 * TMA
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the TMA.com license that is
 * available through the world-wide-web at this URL:
 * https://www.TMA.com/LICENSE.txt
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade this extension to newer
 * version in the future.
 *
 * @category    TMA
 * @package     TMA_SocialLogin
 * @copyright   Copyright (c) 2016 TMA (http://www.TMA.com/)
 * @license     https://www.TMA.com/LICENSE.txt
 */
namespace TMA\SocialLogin\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

/**
 * Class Social
 * @package TMA\SocialLogin\Model\ResourceModel
 */
class Social extends AbstractDb
{
	/**
	 * Define main table
	 */
	protected function _construct()
	{
		$this->_init('tma_social_customer', 'social_customer_id');
	}
}