<?php
/**
 * Magmodules.eu - http://www.magmodules.eu - info@magmodules.eu
 * =============================================================
 * NOTICE OF LICENSE [Single domain license]
 * This source file is subject to the EULA that is
 * available through the world-wide-web at:
 * http://www.magmodules.eu/license-agreement/
 * =============================================================
 * @category    Magmodules
 * @package     Magmodules_Reviewemail
 * @author      Magmodules <info@magmodules.eu>
 * @copyright   Copyright (c) 2015 (http://www.magmodules.eu)
 * @license     http://www.magmodules.eu/license-agreement/  
 * =============================================================
 */
 
class Magmodules_Reviewemail_Model_System_Config_Source_Shopreviewlink {

	public function toOptionArray() {
		$shopreviewlink = array();
		$shopreviewlink[] = array('value'=>'disable', 'label'=> Mage::helper('reviewemail')->__('No'));				
		$shopreviewlink[] = array('value'=>'custom', 'label'=> Mage::helper('reviewemail')->__('Yes, Custom'));				
		$shopreviewlink[] = array('value'=>'trustedshops', 'label'=> Mage::helper('reviewemail')->__('Yes, Trusted Shops'));
		return $shopreviewlink;
	}
	
}