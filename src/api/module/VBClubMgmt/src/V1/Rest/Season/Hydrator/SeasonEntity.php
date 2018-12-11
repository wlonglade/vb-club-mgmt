<?php

namespace VBClubMgmt\V1\Rest\Season\Hydrator;

use VBClubMgmt\V1\Rest\Api\SeasonEntityInterface;

class SeasonEntity extends \VBClubMgmt\Hydrator\AbstractJsonColumns
{
    /**
     * @inheritdoc
     */
    protected function getColumns(): array
    {
        return [
            SeasonEntityInterface::DATA,
        ];
    }
}
