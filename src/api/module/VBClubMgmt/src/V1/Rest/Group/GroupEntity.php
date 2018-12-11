<?php

namespace VBClubMgmt\V1\Rest\Group;

use VBClubMgmt\V1\Rest\Api\GroupEntityInterface;

class GroupEntity implements GroupEntityInterface
{
    /**
     * @var int
     */
    private $groupId;
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
    public function getGroupId(): int
    {
        return $this->groupId;
    }

    /**
     * @inheritdoc
     */
    public function setGroupId($groupId): GroupEntityInterface
    {
        $this->groupId = $groupId;

        return $this;
    }

    /**
     * @inheritdoc
     */
    public function getData(): ?array
    {
        return $this->data;
    }

    /**
     * @inheritdoc
     */
    public function setData($data): GroupEntityInterface
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
    public function setCreatedAt($createdAt): GroupEntityInterface
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * @inheritdoc
     */
    public function getUpdatedAt(): ?string
    {
        return $this->updatedAt;
    }

    /**
     * @inheritdoc
     */
    public function setUpdatedAt($updatedAt): GroupEntityInterface
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }
}
