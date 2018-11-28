<?php
/**
 * Layered Navigation Pro
 *
 * @category:    AdjustWare
 * @package:     AdjustWare_Nav
 * @version      2.5.11
 * @license:     HxObcXe62uQsQGs98TzFPLxwiM3aCakojlW7nJdmvI
 * @copyright:   Copyright (c) 2014 AITOC, Inc. (http://www.aitoc.com)
 */
/**
 * 
 * @author ksenevich
 */
class AdjustWare_Nav_Model_Mysql4_Eav_Entity_Attribute_Stat_Collection extends Mage_Core_Model_Mysql4_Collection_Abstract
{
    public function _construct()
    {
        $this->_init('adjnav/eav_entity_attribute_stat');
    }

    public function setStoreId()
    {
        return $this;
    }
}