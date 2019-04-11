<?php
/**
 * Created by PhpStorm.
 * User: oleh
 * Date: 02.04.19
 * Time: 11:54
 */

class Publish_Articles_Block_Adminhtml_Edit extends Mage_Adminhtml_Block_Widget_Form_Container
{
    protected function _construct()
    {
        $this->_blockGroup = 'publish_articles';
        $this->_mode = 'edit';
        $this->_controller = 'adminhtml';

        $article_id = (int)$this->getRequest()->getParam($this->_objectId);
        $article = Mage::getModel('publish_articles/article')->load($article_id);
        Mage::register('current_article', $article);
    }

    public function getHeaderText()
    {
        $article = Mage::registry('current_article');
        if ($article->getId()) {
            return Mage::helper('publish_articles')->__("Edit Article '%s'", $this->escapeHtml($article->getName()));
        } else {
            return Mage::helper('publish_articles')->__("Add new Article");
        }
    }
}