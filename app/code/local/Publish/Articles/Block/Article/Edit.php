<?php
/**
 * Created by PhpStorm.
 * User: oleh
 * Date: 09.04.19
 * Time: 11:00
 */
class Publish_Articles_Block_Article_Edit extends Mage_Core_Block_Template
{
    protected function _construct()
    {
        $this->setTemplate('publish/articles/create.phtml');
    }

    public function getArticle()
    {
        return Mage::getModel('publish_articles/article')->load($this->getArticleId());
    }
}