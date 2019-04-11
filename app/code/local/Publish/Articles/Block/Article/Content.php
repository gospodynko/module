<?php

/**
 * Created by PhpStorm.
 * User: oleh
 * Date: 02.04.19
 * Time: 11:11
 */
class Publish_Articles_Block_Article_Content extends Mage_Core_Block_Template
{
    protected function _construct()
    {
        $this->setTemplate('publish/articles/article/view.phtml');
    }

    public function getArticle()
    {
        return Mage::getModel('publish_articles/article')->load($this->getArticleId());
    }
}
