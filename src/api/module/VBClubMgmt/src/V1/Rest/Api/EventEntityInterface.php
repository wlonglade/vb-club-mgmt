<?php

namespace VBClubMgmt\V1\Rest\Api;

interface EventEntityInterface
{
    const ID = 'event_id';
    const NAME = 'name';
    const DATE = 'date';
    const DESCRIPTION = 'description';
    const PARTICIPANTS = 'participants';
    const DATA = 'data';
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    /***
     * @return int
     */
    public function getEventId(): int;

    /**
     * @param int $eventId
     *
     * @return \VBClubMgmt\V1\Rest\Api\EventEntityInterface
     */
    public function setEventId($eventId): EventEntityInterface;

    /***
     * @return string
     */
    public function getName(): ?string;

    /**
     * @param string $name
     *
     * @return \VBClubMgmt\V1\Rest\Api\EventEntityInterface
     */
    public function setName($name): EventEntityInterface;

    /***
     * @return string
     */
    public function getDate(): ?string;

    /**
     * @param string $date
     *
     * @return \VBClubMgmt\V1\Rest\Api\EventEntityInterface
     */
    public function setDate($date): EventEntityInterface;

    /***
     * @return string
     */
    public function getDescription(): ?string;

    /**
     * @param string $description
     *
     * @return \VBClubMgmt\V1\Rest\Api\EventEntityInterface
     */
    public function setDescription($description): EventEntityInterface;

    /**
     * @return array
     */
    public function getParticipants(): ?array;

    /**
     * @param array $participants
     *
     * @return \VBClubMgmt\V1\Rest\Api\EventEntityInterface
     */
    public function setParticipants($participants): EventEntityInterface;

    /**
     * @return array
     */
    public function getData(): ?array;

    /**
     * @param array $data
     *
     * @return \VBClubMgmt\V1\Rest\Api\EventEntityInterface
     */
    public function setData($data): EventEntityInterface;

    /**
     * @return string
     */
    public function getCreatedAt(): string;

    /**
     * @param string $createdAt
     *
     * @return \VBClubMgmt\V1\Rest\Api\EventEntityInterface
     */
    public function setCreatedAt($createdAt): EventEntityInterface;

    /**
     * @return string
     */
    public function getUpdatedAt(): ?string;

    /**
     * @param string $updatedAt
     *
     * @return \VBClubMgmt\V1\Rest\Api\EventEntityInterface
     */
    public function setUpdatedAt($updatedAt): EventEntityInterface;
}
