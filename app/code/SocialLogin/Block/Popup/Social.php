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
namespace TMA\SocialLogin\Block\Popup;

use Magento\Framework\View\Element\Template;
use Magento\Framework\View\Element\Template\Context;
use TMA\SocialLogin\Helper\Social as SocialHelper;

/**
 * Class Social
 * @package TMA\SocialLogin\Block\Popup
 */
class Social extends Template
{
	/**
	 * @type \TMA\SocialLogin\Helper\Social
	 */
	protected $socialHelper;

	/**
	 * @param \Magento\Framework\View\Element\Template\Context $context
	 * @param \TMA\SocialLogin\Helper\Social $socialHelper
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
	 * @return array
	 */
	public function getAvailableSocials()
	{
		$availabelSocials = [];

		foreach ($this->socialHelper->getSocialTypes() as $socialKey => $socialLabel) {
			$this->socialHelper->setType($socialKey);
			if ($this->socialHelper->isEnabled()) {
				$availabelSocials[$socialKey] = 
				[
					'label'     => $socialLabel,
					'login_url' => $this->getLoginUrl($socialKey),
				];
			}
		}

		return $availabelSocials;
	}

	/**
	 * @param $key
	 * @return string
	 */
	public function getBtnKey($key)
	{
		switch ($key) {
			case 'vkontakte':
				$class = 'vk';
				break;
			default:
				$class = $key;
		}

		return $class;
	}

	public function getSocialButtonsConfig()
	{
		$availableButtons = $this->getAvailableSocials();
		foreach ($availableButtons as $key => &$button) {
			$button['url']     = $this->getLoginUrl($key, ['authen' => 'popup']);
			$button['key']     = $key;
			$button['btn_key'] = $this->getBtnKey($key);
		}

		return $availableButtons;
	}

	/**
	 * @param null $position
	 * @return bool
	 */
	
	public function canShow($position = null)
	{
		$displayConfig = $this->socialHelper->getGeneralConfig('social_display');
		$displayConfig = explode(',', $displayConfig);

		if (!$position) {
			$position = ($this->getRequest()->getFullActionName() == 'customer_account_login') ?
				\TMA\SocialLogin\Model\System\Config\Source\Position::PAGE_LOGIN :
				\TMA\SocialLogin\Model\System\Config\Source\Position::PAGE_CREATE;
		}

		return in_array($position, $displayConfig);
	}

	/**
	 * @param $socialKey
	 * @param array $params
	 * @return string
	 */
	public function getLoginUrl($socialKey, $params = [])
	{
		$params['type'] = $socialKey;

		return $this->getUrl('sociallogin/social/login', $params);
	}
}
