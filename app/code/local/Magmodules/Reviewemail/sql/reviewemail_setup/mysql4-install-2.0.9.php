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
 
$installer = $this;
$installer->startSetup();

$installer->run("
	DROP TABLE IF EXISTS {$this->getTable('reviewemail')};
	CREATE TABLE {$this->getTable('reviewemail')} (
	  `reviewemail_id` int(11) unsigned NOT NULL auto_increment,
 	  `email_id` TINYINT( 1 ) NOT NULL DEFAULT '1',
	  `store_id` smallint(5) unsigned NOT NULL,
	  `customer_id` int(10) unsigned NOT NULL,
	  `order_id` int(10) unsigned NOT NULL,
	  `created_at` datetime default NULL,
	  `sheduled_at` datetime default NULL,
	  `sent_at` datetime default NULL,	  
	  `updated_at` datetime default NULL,
	  `status` varchar(255) DEFAULT 'scheduled' NOT NULL,	  	  
	  `customer_email` varchar(255) NOT NULL,
	  `customer_name` varchar(255) NOT NULL,
	  `increment` varchar(255) NOT NULL,
	  PRIMARY KEY (`reviewemail_id`)
	) ENGINE=InnoDB DEFAULT CHARSET=utf8;
	
	DROP TABLE IF EXISTS {$this->getTable('reviewemail/exclude')};
	CREATE TABLE `{$this->getTable('reviewemail/exclude')}` (
	  `exclude_id` mediumint(8) unsigned NOT NULL auto_increment,
	  `store_id` smallint UNSIGNED NOT NULL ,
	  `email` varchar(128) NOT NULL,
	  `date` datetime NOT NULL,
	  `status` smallint UNSIGNED NOT NULL,	  
	  KEY `email` (`store_id`, `email`),
	  PRIMARY KEY  (`exclude_id`)
	) ENGINE=InnoDB DEFAULT CHARSET=utf8;
	
	DROP TABLE IF EXISTS {$this->getTable('reviewemail/coupons')};
	CREATE TABLE `{$this->getTable('reviewemail/coupons')}` (
	  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
	  `coupon_id` int(11) unsigned NOT NULL COMMENT 'Coupon Id',
	  `reviewemail_id` int(11) unsigned DEFAULT NULL COMMENT 'Reviewemail Id',
	  `shopreview_id` int(11) DEFAULT NULL,
	  `order_id` int(11) DEFAULT NULL,
	  `store_id` smallint(5) NOT NULL,
	  `customer_name` varchar(255) NOT NULL,
	  `customer_email` varchar(255) NOT NULL,
	  `increment_id` varchar(255) DEFAULT NULL,
	  PRIMARY KEY (`id`)  
	) ENGINE=InnoDB DEFAULT CHARSET=utf8;

	DROP TABLE IF EXISTS {$this->getTable('reviewemail/reviews')};
	CREATE TABLE `{$this->getTable('reviewemail/reviews')}` (
	  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
	  `reviewemail_id` int(11) unsigned NOT NULL COMMENT 'Reviewemail Id',
	  `review_id` int(11) unsigned DEFAULT NULL COMMENT 'Review Id',
	  `shopreview_id` int(11) unsigned DEFAULT NULL COMMENT 'Shopreview Id',
	  `order_id` int(11) DEFAULT NULL COMMENT 'Order Entity ID',
	  `store_id` smallint(5) NOT NULL COMMENT 'Store ID',
	  `customer_name` varchar(255) NOT NULL,
	  `customer_email` varchar(255) NOT NULL,
	  PRIMARY KEY (`id`)  
	) ENGINE=InnoDB DEFAULT CHARSET=utf8;		
		
");

$installer->endSetup(); 