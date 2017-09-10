<?php

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
