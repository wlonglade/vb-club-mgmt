<?php

namespace VBClubMgmt\V1\Rest\Api;

interface SeasonEntityInterface
{
    const ID = 'season_id';
    const DATA = 'data';
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    /***
     * @return int
     */
    public function getSeasonId(): int;

    /**
     * @param int $seasonId
     *
     * @return \VBClubMgmt\V1\Rest\Api\SeasonEntityInterface
     */
    public function setSeasonId($seasonId): SeasonEntityInterface;

    /**
     * @return array
     */
    public function getData(): ?array;

    /**
     * @param array $data
     *
     * @return \VBClubMgmt\V1\Rest\Api\SeasonEntityInterface
     */
    public function setData($data): SeasonEntityInterface;

    /**
     * @return string
     */
    public function getCreatedAt(): string;

    /**
     * @param string $createdAt
     *
     * @return \VBClubMgmt\V1\Rest\Api\SeasonEntityInterface
     */
    public function setCreatedAt($createdAt): SeasonEntityInterface;

    /**
     * @return string
     */
    public function getUpdatedAt(): ?string;

    /**
     * @param string $updatedAt
     *
     * @return \VBClubMgmt\V1\Rest\Api\SeasonEntityInterface
     */
    public function setUpdatedAt($updatedAt): SeasonEntityInterface;
}
