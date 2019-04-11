<?php
class Publish_Articles_Block_Adminhtml_Edit_Form extends Mage_Adminhtml_Block_Widget_Form
{
    protected function _prepareForm()
    {
        $article = Mage::registry('current_article');
        $form = new Varien_Data_Form();
        $fieldset = $form->addFieldset('edit_article', array(
            'legend' => Mage::helper('publish_articles')->__('Article Details')
        ));

        if ($article->getId()) {
            $fieldset->addField('id', 'hidden', array(
                'name'      => 'id',
                'required'  => true
            ));
        }

        $fieldset->addField('name', 'text', array(
            'name'      => 'name',
            'label'     => Mage::helper('publish_articles')->__('Title'),
            'maxlength' => '250',
            'required'  => true,
        ));

        $fieldset->addField('dscr', 'textarea', array(
            'name'      => 'dscr',
            'label'     => Mage::helper('publish_articles')->__('Contents'),
            'style'     => 'width: 98%; height: 200px;',
            'required'  => true,
        ));

        $form->setMethod('post');
        $form->setUseContainer(true);
        $form->setId('edit_form');
        $form->setAction($this->getUrl('*/*/save'));
        $form->setValues($article->getData());

        $this->setForm($form);
    }
}
