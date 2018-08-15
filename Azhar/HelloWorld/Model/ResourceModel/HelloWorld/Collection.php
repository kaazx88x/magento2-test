<?php
/**

 */

namespace Azhar\HelloWorld\Model\ResourceModel\HelloWorld;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    /**
     * Define resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('Azhar\HelloWorld\Model\HelloWorld', 'Azhar\HelloWorld\Model\ResourceModel\HelloWorld');
    }
}
