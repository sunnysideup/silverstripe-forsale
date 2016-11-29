<?php

/**
 *@author nicolaas[at]sunnysideup.co.nz
 *@description: holds For Sale Items and displays them nicely.
 *
 */
class ForSaleHolderPage extends Page
{
    public static $icon = "mysite/images/treeicons/ForSaleHolderPage";

    //static $default_parent = '';

    public static $default_child = 'ForSaleOnePage';

    public static $allowed_children = array('ForSaleOnePage');

    public function getCMSFields()
    {
        $fields = parent::getCMSFields();
        return $fields;
    }
}

class ForSaleHolderPage_Controller extends Page_Controller
{
    public function init()
    {
        parent::init();
        Requirements::themedCSS("ForSaleHolderPage");
    }

    public function ForSales()
    {
        return DataObject::get("ForSaleOnePage", "ShowInMenus = 1 AND ParentID = ".$this->ID);
    }
}
