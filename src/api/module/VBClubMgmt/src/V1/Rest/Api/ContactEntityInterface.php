<?php

namespace VBClubMgmt\V1\Rest\Api;

interface ContactEntityInterface
{
    const ID = 'contact_id';
    const EMAIL = 'email';
    const DATA = 'data';
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    /***
     * @return int
     */
    public function getContactId(): int;

    /**
     * @param int $contactId
     *
     * @return \VBClubMgmt\V1\Rest\Api\ContactEntityInterface
     */
    public function setContactId($contactId): ContactEntityInterface;

    /**
     * @return array
     */
    public function getData(): array;

    /**
     * @param array $data
     *
     * @return \VBClubMgmt\V1\Rest\Api\ContactEntityInterface
     */
    public function setData($data): ContactEntityInterface;

    /**
     * @return string
     */
    public function getCreatedAt(): string;

    /**
     * @param string $createdAt
     *
     * @return \VBClubMgmt\V1\Rest\Api\ContactEntityInterface
     */
    public function setCreatedAt($createdAt): ContactEntityInterface;

    /**
     * @return string
     */
    public function getUpdatedAt(): string;

    /**
     * @param string $updatedAt
     *
     * @return \VBClubMgmt\V1\Rest\Api\ContactEntityInterface
     */
    public function setUpdatedAt($updatedAt): ContactEntityInterface;
}
