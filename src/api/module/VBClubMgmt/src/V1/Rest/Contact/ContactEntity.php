<?php

namespace VBClubMgmt\V1\Rest\Contact;

use VBClubMgmt\V1\Rest\Api\ContactEntityInterface;

class ContactEntity implements ContactEntityInterface
{
    /**
     * @var int
     */
    private $contactId;
    /**
     * @var array
     */
    private $data;
    /**
     * @var string
     */
    private $createdAt;
    /**
     * @var string
     */
    private $updatedAt;


    /**
     * @inheritdoc
     */
    public function getContactId(): int
    {
        return $this->contactId;
    }

    /**
     * @inheritdoc
     */
    public function setContactId($contactId): ContactEntityInterface
    {
        $this->contactId = (int) $contactId;

        return $this;
    }

    /**
     * @inheritdoc
     */
    public function getData(): array
    {
        return $this->data;
    }

    /**
     * @inheritdoc
     */
    public function setData($data): ContactEntityInterface
    {
        $this->data = $data;

        return $this;
    }

    /**
     * @inheritdoc
     */
    public function getCreatedAt(): string
    {
        return $this->createdAt;
    }

    /**
     * @inheritdoc
     */
    public function setCreatedAt($createdAt): ContactEntityInterface
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * @inheritdoc
     */
    public function getUpdatedAt(): string
    {
        return $this->updatedAt;
    }

    /**
     * @inheritdoc
     */
    public function setUpdatedAt($updatedAt): ContactEntityInterface
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }
}
