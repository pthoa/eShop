<?php

namespace TMA\SocialLogin\Block\System;

use Magento\Framework\Data\Form\Element\AbstractElement;
use Magento\Config\Block\System\Config\Form\Field as FormField;
use TMA\SocialLogin\Helper\Social as SocialHelper;
use Magento\Backend\Block\Template\Context;

/**
 * Class Redirect
 * @package TMA\SocialLogin\Block\System
 */
class RedirectUrl extends FormField
{
	/**
	 * @type \TMA\SocialLogin\Helper\Social
	 */
	protected $socialHelper;

	/**
	 * @param \Magento\Backend\Block\Template\Context $context
	 * @param array $data
	 */
	public function __construct(
		Context $context,
		SocialHelper $socialHelper,
		array $data = []
	)
	{
		$this->socialHelper = $socialHelper;
		parent::__construct($context, $data);
	}

	/**
	 * @param AbstractElement $element
	 * @return string
	 */
	protected function _getElementHtml(AbstractElement $element)
	{
		$elementId   = explode('_', $element->getHtmlId());
		$redirectUrl = $this->socialHelper->getAuthUrl($elementId[1]);
		$html        = '<input style="opacity:1;" readonly id="' . $element->getHtmlId() . '" class="input-text admin__control-text" value="' . $redirectUrl . '" onclick="this.select()" type="text">';

		return $html;
	}
}
