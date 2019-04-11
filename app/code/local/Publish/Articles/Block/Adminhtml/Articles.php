<?php
/**
 * Created by PhpStorm.
 * User: oleh
 * Date: 02.04.19
 * Time: 11:55
 */

class Publish_Articles_Block_Adminhtml_Articles extends Mage_Adminhtml_Block_Widget_Grid_Container
{
    protected function _construct()
    {
        $this->_addButtonLabel = Mage::helper('publish_articles')->__('Add New Article');

        $this->_blockGroup = 'publish_articles';
        $this->_controller = 'adminhtml_articles';
        $this->_headerText = Mage::helper('publish_articles')->__('Articles');
    }
}