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
namespace TMA\SocialLogin\Model\System\Config\Source;

/**
 * Class Position
 * @package TMA\SocialLogin\Model\System\Config\Source
 */
class Position implements \Magento\Framework\Option\ArrayInterface
{
	const PAGE_LOGIN = 1;
	const PAGE_CREATE = 2;
	const PAGE_POPUP = 3;
	const PAGE_AUTHEN = 4;

	/**
	 * Options getter
	 *
	 * @return array
	 */
	public function toOptionArray()
	{
		return [
			['value' => '', 'label' => __('-- Please Select --')],
			['value' => self::PAGE_LOGIN, 'label' => __('Customer Login Page')],
			['value' => self::PAGE_CREATE, 'label' => __('Customer Create Page')],
			['value' => self::PAGE_POPUP, 'label' => __('Social Popup Login')],
			['value' => self::PAGE_AUTHEN, 'label' => __('Customer Authentication Popup')]
		];
	}
}
