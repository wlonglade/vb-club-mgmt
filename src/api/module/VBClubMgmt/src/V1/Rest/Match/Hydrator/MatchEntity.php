<?php

namespace VBClubMgmt\V1\Rest\Match\Hydrator;

use VBClubMgmt\V1\Rest\Api\MatchEntityInterface;

class MatchEntity extends \VBClubMgmt\Hydrator\AbstractJsonColumns
{
    /**
     * @inheritdoc
     */
    protected function getColumns(): array
    {
        return [
            MatchEntityInterface::AVAILABLE_PLAYERS,
            MatchEntityInterface::CONFIRMED_PLAYERS,
            MatchEntityInterface::DATA,
        ];
    }
}
