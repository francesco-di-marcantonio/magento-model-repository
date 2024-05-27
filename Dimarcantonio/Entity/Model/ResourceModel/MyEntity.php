<?php
/**
 * Created by PhpStorm.
 * User: fsspencer
 * Date: 11/10/17
 * Time: 7:31 PM
 */

namespace Dimarcantonio\Entity\Model\ResourceModel;


use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class MyEntity extends AbstractDb
{

    /**
     * Resource initialization
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('dimarcantonio_my_entity', 'entity_id');
    }
}