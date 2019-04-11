<?php
/**
 * Created by PhpStorm.
 * User: oleh
 * Date: 02.04.19
 * Time: 11:56
 */
class Publish_Articles_Adminhtml_ArticlesController extends Mage_Adminhtml_Controller_Action
{
    public function indexAction()
    {
        $this->_title($this->__('Articles'));

        $this->loadLayout();
        $this->_setActiveMenu('publish_articles');
        $this->_addBreadcrumb(Mage::helper('publish_articles')->__('Articles'),
            Mage::helper('publish_articles')->__('Articles'));
        $this->renderLayout();
    }

    public function newAction()
    {
        $this->_title($this->__('Add new article'));
        $this->loadLayout();
        $this->_setActiveMenu('publish_articles');
        $this->_addBreadcrumb(Mage::helper('publish_articles')->__('Add new article'),
            Mage::helper('publish_articles')->__('Add new article'));
        $this->renderLayout();
    }

    public function editAction()
    {
        $this->_title($this->__('Edit article'));

        $this->loadLayout();
        $this->_setActiveMenu('publish_articles');
        $this->_addBreadcrumb(Mage::helper('publish_articles')->__('Edit article'),
            Mage::helper('publish_articles')->__('Edit Article'));
        $this->renderLayout();
    }

    public function deleteAction()
    {
        $tipId = $this->getRequest()->getParam('id', false);

        try {
            Mage::getModel('publish_articles/article')->setId($tipId)->delete();
            Mage::getSingleton('adminhtml/session')->addSuccess(Mage::helper('publish_articles')
                ->__('Article successfully deleted'));

            return $this->_redirect('*/*/');
        } catch (Mage_Core_Exception $e){
            Mage::getSingleton('adminhtml/session')->addError($e->getMessage());
        } catch (Exception $e) {
            Mage::logException($e);
            Mage::getSingleton('adminhtml/session')->addError($this->__('Somethings went wrong'));
        }

        $this->_redirectReferer();
    }

    public function saveAction()
    {
        $data = $this->getRequest()->getPost();
        if (!empty($data)) {
            try {
                Mage::getModel('publish_articles/article')->setData($data)
                    ->save();
                Mage::getSingleton('adminhtml/session')->addSuccess(Mage::helper('publish_articles')
                    ->__('Article successfully saved'));
            } catch (Mage_Core_Exception $e) {
                Mage::getSingleton('adminhtml/session')->addError($e->getMessage());
            } catch (Exception $e) {
                Mage::logException($e);
                Mage::getSingleton('adminhtml/session')->addError($this->__('Somethings went wrong'));
            }
        }
        return $this->_redirect('*/*/');
    }

    public function gridAction()
    {
        $this->loadLayout();
        $this->getResponse()->setBody(
            $this->getLayout()->createBlock('publish_articles/adminhtml_articles_grid')->toHtml()
        );
    }

}