<?php

namespace VBClubMgmt\V1\Rest\Api;

interface PostEntityInterface
{
    const ID = 'post_id';
    const TITLE = 'title';
    const CONTENT = 'content';
    const DATA = 'data';
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    /***
     * @return int
     */
    public function getPostId(): int;

    /**
     * @param int $postId
     *
     * @return \VBClubMgmt\V1\Rest\Api\PostEntityInterface
     */
    public function setPostId($postId): PostEntityInterface;

    /**
     * @return string
     */
    public function getTitle(): ?string;

    /**
     * @param string $title
     *
     * @return \VBClubMgmt\V1\Rest\Api\PostEntityInterface
     */
    public function setTitle($title): PostEntityInterface;

    /**
     * @return string
     */
    public function getContent(): ?string;

    /**
     * @param string $content
     *
     * @return \VBClubMgmt\V1\Rest\Api\PostEntityInterface
     */
    public function setContent($content): PostEntityInterface;

    /**
     * @return array
     */
    public function getData(): ?array;

    /**
     * @param array $data
     *
     * @return \VBClubMgmt\V1\Rest\Api\PostEntityInterface
     */
    public function setData($data): PostEntityInterface;

    /**
     * @return string
     */
    public function getCreatedAt(): string;

    /**
     * @param string $createdAt
     *
     * @return \VBClubMgmt\V1\Rest\Api\PostEntityInterface
     */
    public function setCreatedAt($createdAt): PostEntityInterface;

    /**
     * @return string
     */
    public function getUpdatedAt(): ?string;

    /**
     * @param string $updatedAt
     *
     * @return \VBClubMgmt\V1\Rest\Api\PostEntityInterface
     */
    public function setUpdatedAt($updatedAt): PostEntityInterface;
}
