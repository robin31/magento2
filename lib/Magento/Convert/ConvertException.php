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
 * @category   Magento
 * @package    Magento_Convert
 * @copyright  Copyright (c) 2014 X.commerce, Inc. (http://www.magentocommerce.com)
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */
namespace Magento\Convert;

use Magento\Convert\Container\AbstractContainer;
use Magento\Exception;

/**
 * Convert exception
 */
class ConvertException extends Exception
{
    const NOTICE = 'NOTICE';

    const WARNING = 'WARNING';

    const ERROR = 'ERROR';

    const FATAL = 'FATAL';

    /**
     * @var AbstractContainer
     */
    protected $_container;

    /**
     * @var string
     */
    protected $_level;

    /**
     * @var int
     */
    protected $_position;

    /**
     * @param AbstractContainer $container
     * @return $this
     */
    public function setContainer($container)
    {
        $this->_container = $container;
        return $this;
    }

    /**
     * @return AbstractContainer
     */
    public function getContainer()
    {
        return $this->_container;
    }

    /**
     * @return string
     */
    public function getLevel()
    {
        return $this->_level;
    }

    /**
     * @param string $level
     * @return $this
     */
    public function setLevel($level)
    {
        $this->_level = $level;
        return $this;
    }

    /**
     * @return int
     */
    public function getPosition()
    {
        return $this->_position;
    }

    /**
     * @param int $position
     * @return $this
     */
    public function setPosition($position)
    {
        $this->_position = $position;
        return $this;
    }
}
