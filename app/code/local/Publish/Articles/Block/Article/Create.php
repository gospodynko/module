<?php

class Publish_Articles_Block_Article_Create extends Mage_Core_Block_Template
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

