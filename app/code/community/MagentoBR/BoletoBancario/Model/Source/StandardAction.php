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
 * @category   MagentoBR
 * @package    MagentoBR_BoletoBancario
 * @copyright  Copyright (c) 2004-2007 Irubin Consulting Inc. DBA Varien (http://www.varien.com)
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

/**
 *
 * PayPal Payment Action Dropdown source
 *
 */
class MagentoBR_BoletoBancario_Model_Source_StandardAction
{
    public function toOptionArray()
    {
        return array(
            array('value' => MagentoBR_BoletoBancario_Model_Standard::PAYMENT_TYPE_AUTH, 'label' => Mage::helper('BoletoBancario')->__('Authorization')),
            array('value' => MagentoBR_BoletoBancario_Model_Standard::PAYMENT_TYPE_SALE, 'label' => Mage::helper('BoletoBancario')->__('Sale')),
        );
    }
}