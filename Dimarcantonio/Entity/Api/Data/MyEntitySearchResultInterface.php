<?php

namespace Dimarcantonio\Entity\Api\Data;


use Magento\Framework\Data\SearchResultInterface;

interface MyEntitySearchResultInterface extends SearchResultInterface
{
    /**
     * @return \Dimarcantonio\Entity\Api\Data\MyEntityInterface[]
     */
    public function getItems();

    /**
     * @param \Dimarcantonio\Entity\Api\Data\MyEntityInterface[] $items
     * @return void
     */
    public function setItems(array $items);
}