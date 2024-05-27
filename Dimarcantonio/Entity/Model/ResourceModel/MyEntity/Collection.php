<?php
/**
 * Created by PhpStorm.
 * User: fsspencer
 * Date: 11/10/17
 * Time: 7:32 PM
 */

namespace Dimarcantonio\Entity\Model\ResourceModel\MyEntity;


use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{
    public function _construct()
    {
        $this->_init('Dimarcantonio\Entity\Model\MyEntity', 'Dimarcantonio\Entity\Model\ResourceModel\MyEntity');
    }
}