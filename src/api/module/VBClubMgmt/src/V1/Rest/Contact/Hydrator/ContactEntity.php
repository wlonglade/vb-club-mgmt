<?php

namespace VBClubMgmt\V1\Rest\Contact\Hydrator;

use VBClubMgmt\V1\Rest\Api\ContactEntityInterface;

class ContactEntity extends \VBClubMgmt\Hydrator\AbstractJsonColumns
{
    /**
     * @inheritdoc
     */
    protected function getColumns(): array
    {
        return [
            ContactEntityInterface::DATA,
        ];
    }
}
