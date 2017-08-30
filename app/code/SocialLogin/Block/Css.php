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
namespace TMA\SocialLogin\Block;

use TMA\SocialLogin\Helper\Data as DataHelper;
use Magento\Framework\View\Element\Template;
use Magento\Framework\View\Element\Template\Context;

/**
 * Class Css
 * @package TMA\SocialLogin\Block
 */
class Css extends Template
{
	/**
	 * @type \TMA\SocialLogin\Helper\Data
	 */
	protected $_helper;

	/**
	 * @param \Magento\Framework\View\Element\Template\Context $context
	 * @param \TMA\SocialLogin\Helper\Data $helper
	 * @param array $data
	 */
	public function __construct(
		Context $context,
		DataHelper $helper,
		array $data = []
	)
	{
		parent::__construct($context, $data);

		$this->_helper = $helper;
	}

	/**
	 * @return $this
	 */
	protected function _prepareLayout()
	{
		if ($this->_helper->isEnabled()) {
			if ($this->_helper->getGeneralConfig('popup_login')) {
				$this->pageConfig->addPageAsset('TMA_SocialLogin::css/style.css');
				$this->pageConfig->addPageAsset('TMA_SocialLogin::css/grid.css');
				$this->pageConfig->addPageAsset('TMA_SocialLogin::css/font-awesome.min.css');
				$this->pageConfig->addPageAsset('TMA_SocialLogin::css/magnific-popup.css');
			} elseif (in_array($this->_request->getFullActionName(), ['customer_account_login', 'customer_account_create'])) {
				$this->pageConfig->addPageAsset('TMA_SocialLogin::css/style.css');
				$this->pageConfig->addPageAsset('TMA_SocialLogin::css/font-awesome.min.css');
			}
		}

		return $this;
	}

	/**
	 * @return \TMA\SocialLogin\Helper\Data
	 */
	public function helper()
	{
		return $this->_helper;
	}
}
