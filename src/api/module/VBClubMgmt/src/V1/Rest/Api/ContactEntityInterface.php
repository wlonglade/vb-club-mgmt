<?php

namespace VBClubMgmt\V1\Rest\Api;

interface ContactEntityInterface
{
    public function getContactId();

    public function setContactId($contactId);

    public function getData();

    public function setData($data);

    public function getCreatedAt();

    public function getUpdatedAt();
}
