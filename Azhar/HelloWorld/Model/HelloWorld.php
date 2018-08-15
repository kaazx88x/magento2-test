<?php

namespace Azhar\HelloWorld\Model;
 
class HelloWorld extends \Magento\Framework\Model\AbstractModel
{
   protected function _construct()
    {
        parent::_construct();
        $this->_init('Azhar\HelloWorld\Model\ResourceModel\HelloWorld');
    }

}