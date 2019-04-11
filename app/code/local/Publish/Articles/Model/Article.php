<?php
/**
 * Created by PhpStorm.
 * User: oleh
 * Date: 01.04.19
 * Time: 17:04
 */
class Publish_Articles_Model_Article extends Mage_Core_Model_Abstract
{
    protected function _construct()
    {
        $this->_init('publish_articles/article');
    }
}