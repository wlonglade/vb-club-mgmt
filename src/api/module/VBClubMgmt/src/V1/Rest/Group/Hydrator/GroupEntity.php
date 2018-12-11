<?php

namespace VBClubMgmt\V1\Rest\Group\Hydrator;

use VBClubMgmt\V1\Rest\Api\GroupEntityInterface;

class GroupEntity extends \VBClubMgmt\Hydrator\AbstractJsonColumns
{
    /**
     * @inheritdoc
     */
    protected function getColumns(): array
    {
        return [
            GroupEntityInterface::DATA,
        ];
    }
}
