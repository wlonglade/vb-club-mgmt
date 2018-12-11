<?php

namespace VBClubMgmt\V1\Rest\Opponent;

use VBClubMgmt\V1\Rest\Api\OpponentEntityInterface;

class OpponentEntity implements OpponentEntityInterface
{
    /**
     * @var int
     */
    private $opponentId;
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
    public function getOpponentId(): int
    {
        return $this->opponentId;
    }

    /**
     * @inheritdoc
     */
    public function setOpponentId($opponentId): OpponentEntityInterface
    {
        $this->opponentId = $opponentId;

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
    public function setData($data): OpponentEntityInterface
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
    public function setCreatedAt($createdAt): OpponentEntityInterface
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
    public function setUpdatedAt($updatedAt): OpponentEntityInterface
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }
}
