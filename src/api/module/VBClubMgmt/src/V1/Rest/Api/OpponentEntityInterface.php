<?php

namespace VBClubMgmt\V1\Rest\Api;

interface OpponentEntityInterface
{
    const ID = 'opponent_id';
    const DATA = 'data';
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    /***
     * @return int
     */
    public function getOpponentId(): int;

    /**
     * @param int $opponentId
     *
     * @return \VBClubMgmt\V1\Rest\Api\OpponentEntityInterface
     */
    public function setOpponentId($opponentId): OpponentEntityInterface;

    /**
     * @return array
     */
    public function getData(): ?array;

    /**
     * @param array $data
     *
     * @return \VBClubMgmt\V1\Rest\Api\OpponentEntityInterface
     */
    public function setData($data): OpponentEntityInterface;

    /**
     * @return string
     */
    public function getCreatedAt(): string;

    /**
     * @param string $createdAt
     *
     * @return \VBClubMgmt\V1\Rest\Api\OpponentEntityInterface
     */
    public function setCreatedAt($createdAt): OpponentEntityInterface;

    /**
     * @return string
     */
    public function getUpdatedAt(): ?string;

    /**
     * @param string $updatedAt
     *
     * @return \VBClubMgmt\V1\Rest\Api\OpponentEntityInterface
     */
    public function setUpdatedAt($updatedAt): OpponentEntityInterface;
}
