<?php

/**
 *@author nicolaas[at]sunnysideup.co.nz
 *@description: holds For Sale Items and displays them nicely.
 *
 */
class ForSaleHolderPage extends Page {

	static $icon = "mysite/images/treeicons/ForSaleHolderPage";

	//static $default_parent = '';

	static $default_child = 'ForSaleOnePage';

	static $allowed_children = array('ForSaleOnePage');

	function getCMSFields() {
		$fields = parent::getCMSFields();
		return $fields;
	}

}

class ForSaleHolderPage_Controller extends Page_Controller {



	function init() {
		parent::init();
		Requirements::themedCSS("ForSaleHolderPage");
	}

	function ForSales() {
		return DataObject::get("ForSaleOnePage", "ShowInMenus = 1 AND ParentID = ".$this->ID);
	}

}

