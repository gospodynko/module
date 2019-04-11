<?php
/**
 * Created by PhpStorm.
 * User: oleh
 * Date: 01.04.19
 * Time: 17:03
 */
class Publish_Articles_Model_Resource_Article extends Mage_Core_Model_Mysql4_Abstract
{
    protected function _construct()
    {
        $this->_init('publish_articles/article', 'id');
    }
}