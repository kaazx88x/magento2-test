<?php
/**
 * Copyright © 2015 Amasty. All rights reserved.
 */

namespace Azhar\HelloWorld\Model\ResourceModel;

class HelloWorld extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
    /**
     * Model Initialization
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('azhar_helloworld', 'id');
    }
}
