<?php

namespace VBClubMgmt\V1\Rest\Event\Hydrator;

use VBClubMgmt\V1\Rest\Api\EventEntityInterface;

class EventEntity extends \VBClubMgmt\Hydrator\AbstractJsonColumns
{
    /**
     * @inheritdoc
     */
    protected function getColumns(): array
    {
        return [
            EventEntityInterface::PARTICIPANTS,
            EventEntityInterface::DATA,
        ];
    }
}
