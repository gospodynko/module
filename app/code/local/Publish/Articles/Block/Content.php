<?php

class Publish_Articles_Block_Content extends Mage_Core_Block_Template
{
    protected function _construct()
    {
        $this->setTemplate('publish/articles/view.phtml');
    }


    public function getRowUrl(Publish_Articles_Model_Article $article)
    {
        return $this->getUrl('*/*/view', array(
            'id' => $article->getId()
        ));
    }

    public function getCollection()
    {
        $conf = (int)Mage::getStoreConfig('publish_articles/basic_config/quantity', Mage::app()->getStore());
        if (is_numeric($conf) && !empty($conf)) {
            return Mage::getModel('publish_articles/article')->getCollection()->setPageSize($conf);
        } else {
            return Mage::getModel('publish_articles/article')->getCollection();
        }
    }
}