<?php

namespace VBClubMgmt\V1\Rest\Api;

interface MatchEntityInterface
{
    const ID = 'match_id';
    const TOURNAMENT_ID = 'tournament_id';
    const OPPONENT_ID = 'opponent_id';
    const DATE = 'date';
    const AVAILABLE_PLAYERS = 'available_players';
    const CONFIRMED_PLAYERS = 'confirmed_players';
    const DATA = 'data';
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    /***
     * @return int
     */
    public function getMatchId(): int;

    /**
     * @param $matchId
     *
     * @return \VBClubMgmt\V1\Rest\Api\MatchEntityInterface
     */
    public function setMatchId($matchId): MatchEntityInterface;

    /***
     * @return int
     */
    public function getTournamentId(): int;

    /**
     * @param int $tournamentId
     *
     * @return \VBClubMgmt\V1\Rest\Api\MatchEntityInterface
     */
    public function setTournamentId($tournamentId): MatchEntityInterface;

    /***
     * @return int
     */
    public function getOpponentId(): int;

    /**
     * @param int $opponentId
     *
     * @return \VBClubMgmt\V1\Rest\Api\MatchEntityInterface
     */
    public function setOpponentId($opponentId): MatchEntityInterface;

    /**
     * @return array
     */
    public function getDate(): ?string;

    /**
     * @param array $date
     *
     * @return \VBClubMgmt\V1\Rest\Api\MatchEntityInterface
     */
    public function setDate($date): MatchEntityInterface;

    /**
     * @return array
     */
    public function getAvailablePlayers(): ?array;

    /**
     * @param $availablePlayers
     *
     * @return \VBClubMgmt\V1\Rest\Api\MatchEntityInterface
     */
    public function setAvailablePlayers($availablePlayers): MatchEntityInterface;

    /**
     * @return array
     */
    public function getConfirmedPlayers(): ?array;

    /**
     * @param $confirmedPlayers
     *
     * @return \VBClubMgmt\V1\Rest\Api\MatchEntityInterface
     */
    public function setConfirmedPlayers($confirmedPlayers): MatchEntityInterface;

    /**
     * @return array
     */
    public function getData(): ?array;

    /**
     * @param array $data
     *
     * @return \VBClubMgmt\V1\Rest\Api\MatchEntityInterface
     */
    public function setData($data): MatchEntityInterface;

    /**
     * @return string
     */
    public function getCreatedAt(): string;

    /**
     * @param string $createdAt
     *
     * @return \VBClubMgmt\V1\Rest\Api\MatchEntityInterface
     */
    public function setCreatedAt($createdAt): MatchEntityInterface;

    /**
     * @return string
     */
    public function getUpdatedAt(): ?string;

    /**
     * @param string $updatedAt
     *
     * @return \VBClubMgmt\V1\Rest\Api\MatchEntityInterface
     */
    public function setUpdatedAt($updatedAt): MatchEntityInterface;
}
