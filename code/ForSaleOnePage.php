<?php
/**
 *@author nicolaas[at] sunnysideup.co.nz
 *@description: individual ForSale page. Usually, these are not viewed as they can be read completely from the parent (ForSale HOLDER) page.
 */
class ForSaleOnePage extends Page {

	static $icon = "mysite/images/treeicons/ForSaleOnePage";

	static $default_parent = 'ForSaleHolderPage';

	static $allowed_children = "none";

	static $db = array(
		"IntroText" => "Varchar(255)",
		"PriceDescription" => "Varchar(255)",
		"ContactDetails" => "HTMLText"
	);

	static $has_one = array(
		"ProductImage" => "Image"
	);


	//static $has_many = array();

	function getCMSFields() {
		$fields = parent::getCMSFields();
		$fields->replaceField("Title", new TextField("Title", "Product Name"));
		$fields->replaceField("MenuTitle", new TextField("MenuTitle", "Product Name - short version for menus"));
		$fields->replaceField("Content", new HtmlEditorField("Content", "Product Description", $rows = 7, $cols = 7));
		$fields->addFieldToTab("Root.Content.ProductInfo", new TextField("IntroText", "Intro Text"));
		$fields->addFieldToTab("Root.Content.ProductInfo", new TextField("PriceDescription", "Price Description"));
		$fields->addFieldToTab("Root.Content.ProductInfo", new HtmlEditorField("ContactDetails", "Contact Details", $rows = 7, $cols = 7));
		$fields->addFieldToTab("Root.Content.ProductInfo", new ImageField("ProductImage", "Product Image"));
		return $fields;
	}

}

class ForSaleOnePage_Controller extends Page_Controller {



	function init() {
		parent::init();
	}



}

