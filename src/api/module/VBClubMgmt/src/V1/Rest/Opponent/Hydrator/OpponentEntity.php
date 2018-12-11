<?php

namespace VBClubMgmt\V1\Rest\Opponent\Hydrator;

use VBClubMgmt\V1\Rest\Api\OpponentEntityInterface;

class OpponentEntity extends \VBClubMgmt\Hydrator\AbstractJsonColumns
{
    /**
     * @inheritdoc
     */
    protected function getColumns(): array
    {
        return [
            OpponentEntityInterface::DATA,
        ];
    }
}
