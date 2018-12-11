<?php

namespace VBClubMgmt\V1\Rest\Post;

use VBClubMgmt\V1\Rest\Api\PostEntityInterface;

class PostEntity implements PostEntityInterface
{
    /**
     * @var int
     */
    private $postId;
    /**
     * @var string
     */
    private $title;
    /**
     * @var string
     */
    private $content;
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
    public function getPostId(): int
    {
        return $this->postId;
    }

    /**
     * @inheritdoc
     */
    public function setPostId($postId): PostEntityInterface
    {
        $this->postId = $postId;

        return $this;
    }

    /**
     * @inheritdoc
     */
    public function getTitle(): ?string
    {
        return $this->title;
    }

    /**
     * @param string $title
     *
     * @return \VBClubMgmt\V1\Rest\Api\PostEntityInterface
     */
    public function setTitle($title): PostEntityInterface
    {
        $this->title = $title;

        return $this;
    }

    /**
     * @return string
     */
    public function getContent(): ?string
    {
        return $this->content;
    }

    /**
     * @param string $content
     *
     * @return \VBClubMgmt\V1\Rest\Api\PostEntityInterface
     */
    public function setContent($content): PostEntityInterface
    {
        $this->content = $content;

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
    public function setData($data): PostEntityInterface
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
    public function setCreatedAt($createdAt): PostEntityInterface
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
    public function setUpdatedAt($updatedAt): PostEntityInterface
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }
}
