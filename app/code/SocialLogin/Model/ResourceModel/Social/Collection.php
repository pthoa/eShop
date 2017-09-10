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
namespace TMA\SocialLogin\Model\ResourceModel\Social;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

/**
 * Class Collection
 * @package TMA\SocialLogin\Model\ResourceModel\Social
 */
class Collection extends AbstractCollection
{
    /**
     * Define model & resource model
     */
    protected function _construct()
    {
        $this->_init('TMA\SocialLogin\Model\Social', 'TMA\SocialLogin\Model\ResourceModel\Social');
    }
}