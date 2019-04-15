<?php

class Publish_Articles_IndexController extends Mage_Core_Controller_Front_Action
{
    public function indexAction()
    {
        $this->loadLayout()
            ->renderLayout();
    }

    public function viewAction()
    {
        $article_id = (int)$this->getRequest()->getParam('id');
        if (!$article_id) {
            $this->_forward('noRoute');
        }
        $this->loadLayout();
        $this->getLayout()
            ->getBlock('article.item')
            ->setArticleId($article_id);
        $this->renderLayout();
    }

    public function createAction()
    {
        if ((bool)Mage::getStoreConfig('publish_articles/basic_config/article_checkbox', Mage::app()->getStore())) {
            $this->loadLayout()
                ->renderLayout();
        } else {
            Mage::getSingleton('core/session')->addError(Mage::helper('publish_articles')
                ->__('Article cannot create'));
            return $this->_redirect('*/*/');
        }
    }

    public function postAction()
    {
        if ((bool)Mage::getStoreConfig('publish_articles/basic_config/article_checkbox', Mage::app()->getStore())) {
            $data = $this->getRequest()->getParams();
            if (!empty($data)) {
                try {
                    Mage::getModel('publish_articles/article')->setData($data)
                        ->save();
                    Mage::getSingleton('core/session')->addSuccess(Mage::helper('publish_articles')
                        ->__('Article successfully saved'));
                } catch (Mage_Core_Exception $e) {
                    Mage::getSingleton('core/session')->addError($e->getMessage());
                } catch (Exception $e) {
                    Mage::logException($e);
                    Mage::getSingleton('core/session')->addError($this->__('Somethings went wrong'));
                }
            }

            return $this->_redirect('*/*/');
        } else {
            Mage::getSingleton('core/session')->addError(Mage::helper('publish_articles')
                ->__('Article cannot create'));
            return $this->_redirect('*/*/');
        }
    }

    public function editAction()
    {
        if ((bool)Mage::getStoreConfig('publish_articles/basic_config/article_checkbox', Mage::app()->getStore())) {
            $article_id = (int)$this->getRequest()->getParam('id');
            $this->loadLayout();
            $this->getLayout()
                ->getBlock('article.item')
                ->setArticleId($article_id);
            $this->renderLayout();
        } else {
            Mage::getSingleton('core/session')->addError(Mage::helper('publish_articles')
                ->__('Article cannot edit'));
            return $this->_redirect('*/*/');
        }
    }

    public function deleteAction()
    {
        if ((bool)Mage::getStoreConfig('publish_articles/basic_config/article_checkbox', Mage::app()->getStore())) {
            $params = $this->getRequest()->getParams();
            $data = Mage::getModel('publish_articles/article');
            $data->load($params['id']);
            Mage::getSingleton('core/session')->addSuccess(Mage::helper('publish_articles')
                ->__('Article successfully delete'));
            $data->delete();
        } else {
            Mage::getSingleton('core/session')->addError(Mage::helper('publish_articles')
                ->__('Article cannot delete'));
            return $this->_redirect('*/*/');
        }
    }
}