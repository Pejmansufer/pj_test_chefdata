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
 
class Magmodules_Reviewemail_Model_Exclude extends Mage_Core_Model_Abstract {

    public function _construct() {
        parent::_construct();
        $this->_init('reviewemail/exclude');
    }

    public function loadExclude($exclude_id) {
		$this->_getResource()->load($this, $exclude_id, 'exclude_id');
        return $this;
    }
    
	public function isOnList($email) {
        $this->_getResource()->load($this, $email, 'email');
        return $this;
    } 
    
}