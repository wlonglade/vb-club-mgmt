<?php

namespace VBClubMgmt\V1\Rest\Event;

use VBClubMgmt\V1\Rest\Api\EventEntityInterface;

class EventEntity implements EventEntityInterface
{
    /**
     * @var int
     */
    private $eventId;
    /**
     * @var string
     */
    private $name;
    /**
     * @var string
     */
    private $date;
    /**
     * @var string
     */
    private $description;
    /**
     * @var array
     */
    private $participants;
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
    public function getEventId(): int
    {
        return $this->eventId;
    }

    /**
     * @inheritdoc
     */
    public function setEventId($eventId): EventEntityInterface
    {
        $this->eventId = $eventId;

        return $this;
    }

    /**
     * @inheritdoc
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @inheritdoc
     */
    public function setName($name): EventEntityInterface
    {
        $this->name = $name;

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
    public function setDate($date): EventEntityInterface
    {
        $this->date = $date;

        return $this;
    }

    /**
     * @inheritdoc
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * @inheritdoc
     */
    public function setDescription($description): EventEntityInterface
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @inheritdoc
     */
    public function getParticipants(): ?array
    {
        return $this->participants;
    }

    /**
     * @inheritdoc
     */
    public function setParticipants($participants): EventEntityInterface
    {
        $this->participants = $participants;

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
    public function setData($data): EventEntityInterface
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
    public function setCreatedAt($createdAt): EventEntityInterface
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
    public function setUpdatedAt($updatedAt): EventEntityInterface
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }
}
