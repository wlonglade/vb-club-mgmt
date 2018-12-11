<?php

namespace VBClubMgmt\V1\Rest\Api;

interface TournamentEntityInterface
{
    const ID = 'tournament_id';
    const SEASON_ID = 'season_id';
    const DATA = 'data';
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    /***
     * @return int
     */
    public function getTournamentId(): int;

    /**
     * @param int $tournamentId
     *
     * @return \VBClubMgmt\V1\Rest\Api\TournamentEntityInterface
     */
    public function setTournamentId($tournamentId): TournamentEntityInterface;

    /***
     * @return int
     */
    public function getSeasonId(): int;

    /**
     * @param int $seasonId
     *
     * @return \VBClubMgmt\V1\Rest\Api\TournamentEntityInterface
     */
    public function setSeasonId($seasonId): TournamentEntityInterface;

    /**
     * @return array
     */
    public function getData(): ?array;

    /**
     * @param array $data
     *
     * @return \VBClubMgmt\V1\Rest\Api\TournamentEntityInterface
     */
    public function setData($data): TournamentEntityInterface;

    /**
     * @return string
     */
    public function getCreatedAt(): string;

    /**
     * @param string $createdAt
     *
     * @return \VBClubMgmt\V1\Rest\Api\TournamentEntityInterface
     */
    public function setCreatedAt($createdAt): TournamentEntityInterface;

    /**
     * @return string
     */
    public function getUpdatedAt(): ?string;

    /**
     * @param string $updatedAt
     *
     * @return \VBClubMgmt\V1\Rest\Api\TournamentEntityInterface
     */
    public function setUpdatedAt($updatedAt): TournamentEntityInterface;
}
