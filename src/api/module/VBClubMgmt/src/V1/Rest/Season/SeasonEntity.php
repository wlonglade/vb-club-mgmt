<?php

namespace VBClubMgmt\V1\Rest\Season;

use VBClubMgmt\V1\Rest\Api\SeasonEntityInterface;

class SeasonEntity implements SeasonEntityInterface
{
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
    public function getSeasonId(): int
    {
        return $this->seasonId;
    }

    /**
     * @inheritdoc
     */
    public function setSeasonId($seasonId): SeasonEntityInterface
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
    public function setData($data): SeasonEntityInterface
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
    public function setCreatedAt($createdAt): SeasonEntityInterface
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
    public function setUpdatedAt($updatedAt): SeasonEntityInterface
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }
}
