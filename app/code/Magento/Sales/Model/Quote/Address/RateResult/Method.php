<?php
/**
 * Magento
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@magentocommerce.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade Magento to newer
 * versions in the future. If you wish to customize Magento for your
 * needs please refer to http://www.magentocommerce.com for more information.
 *
 * @copyright   Copyright (c) 2014 X.commerce, Inc. (http://www.magentocommerce.com)
 * @license     http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */
namespace Magento\Sales\Model\Quote\Address\RateResult;

/**
 * Fields:
 * - carrier: carrier code
 * - carrierTitle: carrier title
 * - method: carrier method
 * - methodTitle: method title
 * - price: cost+handling
 * - cost: cost
 */
class Method extends AbstractResult
{
    /**
     * @var \Magento\Core\Model\StoreManagerInterface
     */
    protected $_storeManager;

    /**
     * @param \Magento\Core\Model\StoreManagerInterface $storeManager
     * @param array $data
     */
    public function __construct(\Magento\Core\Model\StoreManagerInterface $storeManager, array $data = array())
    {
        $this->_storeManager = $storeManager;
        parent::__construct($data);
    }

    /**
     * Round shipping carrier's method price
     *
     * @param string|float|int $price
     * @return $this
     */
    public function setPrice($price)
    {
        $this->setData('price', $this->_storeManager->getStore()->roundPrice($price));
        return $this;
    }
}
