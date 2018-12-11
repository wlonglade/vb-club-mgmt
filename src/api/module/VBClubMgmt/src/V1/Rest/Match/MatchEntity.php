<?php

namespace VBClubMgmt\V1\Rest\Match;

use VBClubMgmt\V1\Rest\Api\MatchEntityInterface;

class MatchEntity implements MatchEntityInterface
{
    /**
     * @var int
     */
    private $matchId;
    /**
     * @var int
     */
    private $tournamentId;
    /**
     * @var int
     */
    private $opponentId;
    /**
     * @var string
     */
    private $date;
    /**
     * @var array
     */
    private $availablePlayers;
    /**
     * @var array
     */
    private $confirmedPlayers;
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
    public function getMatchId(): int
    {
        return $this->matchId;
    }

    /**
     * @inheritdoc
     */
    public function setMatchId($matchId): MatchEntityInterface
    {
        $this->matchId = $matchId;

        return $this;
    }

    /**
     * @inheritdoc
     */
    public function getTournamentId(): int
    {
        return $this->tournamentId;
    }

    /**
     * @inheritdoc
     */
    public function setTournamentId($tournamentId): MatchEntityInterface
    {
        $this->tournamentId = $tournamentId;

        return $this;
    }

    /**
     * @inheritdoc
     */
    public function getOpponentId(): int
    {
        return $this->opponentId;
    }

    /**
     * @inheritdoc
     */
    public function setOpponentId($opponentId): MatchEntityInterface
    {
        $this->opponentId = $opponentId;

        return $this;
    }

    /**
     * @inheritdoc
     */
    public function getDate(): ?string
    {
        return $this->date;
    }

    /**
     * @inheritdoc
     */
    public function setDate($date): MatchEntityInterface
    {
        $this->date = $date;

        return $this;
    }

    /**
     * @inheritdoc
     */
    public function getAvailablePlayers(): ?array
    {
        return $this->availablePlayers;
    }

    /**
     * @inheritdoc
     */
    public function setAvailablePlayers($availablePlayers): MatchEntityInterface
    {
        $this->availablePlayers = $availablePlayers;

        return $this;
    }

    /**
     * @inheritdoc
     */
    public function getConfirmedPlayers(): ?array
    {
        return $this->confirmedPlayers;
    }

    /**
     * @inheritdoc
     */
    public function setConfirmedPlayers($confirmedPlayers): MatchEntityInterface
    {
        $this->confirmedPlayers = $confirmedPlayers;

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
    public function setData($data): MatchEntityInterface
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
    public function setCreatedAt($createdAt): MatchEntityInterface
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
    public function setUpdatedAt($updatedAt): MatchEntityInterface
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }
}
