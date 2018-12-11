<?php

namespace VBClubMgmt\V1\Rest\Tournament\Hydrator;

use VBClubMgmt\V1\Rest\Api\TournamentEntityInterface;

class TournamentEntity extends \VBClubMgmt\Hydrator\AbstractJsonColumns
{
    /**
     * @inheritdoc
     */
    protected function getColumns(): array
    {
        return [
            TournamentEntityInterface::DATA,
        ];
    }
}
