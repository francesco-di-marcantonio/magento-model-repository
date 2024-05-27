<?php

namespace Dimarcantonio\Entity\Api;
use Magento\Framework\Api\SearchCriteriaInterface;

/**
 * Interface MyEntityRepositoryInterface
 * @package Dimarcantonio\Entity\Api
 */
interface MyEntityRepositoryInterface
{
    /**
     * @param \Dimarcantonio\Entity\Api\Data\MyEntityInterface $myEntity
     * @return \Dimarcantonio\Entity\Api\Data\MyEntityInterface
     */
    public function save(\Dimarcantonio\Entity\Api\Data\MyEntityInterface $myEntity);

    /**
     * @param \Dimarcantonio\Entity\Api\Data\MyEntityInterface $myEntity
     * @return \Dimarcantonio\Entity\Api\Data\MyEntityInterface
     */
    public function delete(\Dimarcantonio\Entity\Api\Data\MyEntityInterface $myEntity);

    /**
     * @param SearchCriteriaInterface $criteria
     * @return \Dimarcantonio\Entity\Api\Data\MyEntitySearchResultInterface
     */
    public function getList(SearchCriteriaInterface $criteria);

    /**
     * @param $id
     * @return mixed
     */
    public function getById($id);

    /**
     * @param $id
     * @return mixed
     */
    public function deleteById($id);
}