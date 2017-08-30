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

namespace TMA\SocialLogin\Block\Form;

/**
 * Class Register
 * @package TMA\SocialLogin\Block\Form
 */
class Register extends \Magento\Customer\Block\Form\Register
{
	/**
	 * @return $this
	 */
	protected function _prepareLayout()
	{
		return $this;
	}
}
