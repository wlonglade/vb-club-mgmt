<?php

namespace VBClubMgmt\V1\Rest\Post\Hydrator;

use VBClubMgmt\V1\Rest\Api\PostEntityInterface;

class PostEntity extends \VBClubMgmt\Hydrator\AbstractJsonColumns
{
    /**
     * @inheritdoc
     */
    protected function getColumns(): array
    {
        return [
            PostEntityInterface::DATA,
        ];
    }
}
