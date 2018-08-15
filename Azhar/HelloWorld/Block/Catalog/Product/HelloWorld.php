<?php
/**
 * Copyright © 2013-2017 Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Azhar\HelloWorld\Block\Catalog\Product;

class HelloWorld extends \Magento\Framework\View\Element\Template
{
        /**
     * @var \Azhar\HelloWorld\Helper\Data
     */
    protected $_helper;
    protected $_storeManager;
    protected $_urlInterface;

    /**
     * @var \Magento\Framework\ObjectManagerInterface
     */
    protected $_objectManager;

    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        \Magento\Store\Model\StoreManagerInterface $storeManager,
        \Magento\Framework\UrlInterface $urlInterface,    
        array $data = [],
        \Azhar\HelloWorld\Helper\Data $helper,
        \Magento\Framework\ObjectManagerInterface $objectManager
    ) {
        parent::__construct($context, $data);

        $this->_helper
            = $helper;
        $this->_objectManager = $objectManager;
    }

    // public function getBlockLabel(){
    //     return $this->_helper->getBlockLabel();
    // }

    // public function getTextAlign(){
    //     return $this->_helper->getTextAlign();
    // }

    public function getImage(){
        //return $this->_helper->getImage();
        $url = $this->_storeManager->getStore()->getBaseUrl(\Magento\Framework\UrlInterface::URL_TYPE_MEDIA).'/image/'.$this->_helper->getImage();
        return $url;
    }

    protected function _toHtml()
    {
       if ($this->_helper->getEnable()){
            return parent::_toHtml();
       }
        else {
            return '';
        }
    }

    // public function getCollection()
    // {
    //     $model = $this->_objectManager->create('Azhar\HelloWorld\Model\HelloWorld');
    //     $collection = $model->getCollection();

    //     return $collection;
    // }
}
