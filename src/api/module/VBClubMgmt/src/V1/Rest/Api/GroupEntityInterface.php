<?php

namespace VBClubMgmt\V1\Rest\Api;

interface GroupEntityInterface
{
    const ID = 'group_id';
    const DATA = 'data';
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    /***
     * @return int
     */
    public function getGroupId(): int;

    /**
     * @param int $groupId
     *
     * @return \VBClubMgmt\V1\Rest\Api\GroupEntityInterface
     */
    public function setGroupId($groupId): GroupEntityInterface;

    /**
     * @return array
     */
    public function getData(): ?array;

    /**
     * @param array $data
     *
     * @return \VBClubMgmt\V1\Rest\Api\GroupEntityInterface
     */
    public function setData($data): GroupEntityInterface;

    /**
     * @return string
     */
    public function getCreatedAt(): string;

    /**
     * @param string $createdAt
     *
     * @return \VBClubMgmt\V1\Rest\Api\GroupEntityInterface
     */
    public function setCreatedAt($createdAt): GroupEntityInterface;

    /**
     * @return string
     */
    public function getUpdatedAt(): ?string;

    /**
     * @param string $updatedAt
     *
     * @return \VBClubMgmt\V1\Rest\Api\GroupEntityInterface
     */
    public function setUpdatedAt($updatedAt): GroupEntityInterface;
}
