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
namespace TMA\SocialLogin\Block\System\Config\Form;

use Magento\Framework\Data\Form\Element\AbstractElement;
use Magento\Config\Block\System\Config\Form\Field as FormField;
use TMA\SocialLogin\Helper\Social as SocialHelper;
use Magento\Backend\Block\Template\Context;

/**
 * Class Redirect
 * @package TMA\SocialLogin\Block\System\Config\Form
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
