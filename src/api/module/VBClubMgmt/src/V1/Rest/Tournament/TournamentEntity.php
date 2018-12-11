<?php

namespace VBClubMgmt\V1\Rest\Tournament;

use VBClubMgmt\V1\Rest\Api\TournamentEntityInterface;

class TournamentEntity implements TournamentEntityInterface
{
    /**
     * @var int
     */
    private $tournamentId;
    /**
     * @var int
     */
    private $seasonId;
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
    public function getTournamentId(): int
    {
        return $this->tournamentId;
    }

    /**
     * @inheritdoc
     */
    public function setTournamentId($tournamentId): TournamentEntityInterface
    {
        $this->tournamentId = $tournamentId;

        return $this;
    }

    /**
     * @inheritdoc
     */
    public function getSeasonId(): int
    {
        return $this->seasonId;
    }

    /**
     * @inheritdoc
     */
    public function setSeasonId($seasonId): TournamentEntityInterface
    {
        $this->seasonId = $seasonId;

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
    public function setData($data): TournamentEntityInterface
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
    public function setCreatedAt($createdAt): TournamentEntityInterface
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
    public function setUpdatedAt($updatedAt): TournamentEntityInterface
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }
}
