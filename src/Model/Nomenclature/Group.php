<?php

namespace Model\Nomenclature;

class Group
{
    private string $id;
    private ?string $code;
    private ?string $description;
    private bool $isDeleted = false;
    private ?string $name;
    private ?string $seoDescription;
    private ?string $seoKeywords;
    private ?string $seoText;
    private ?string $seoTitle;
    private ?string $isIncludedInMenu;
    private int $order;
    private ?string $parent_id;

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @param string $id
     */
    public function setId(string $id): void
    {
        $this->id = $id;
    }

    /**
     * @return string|null
     */
    public function getCode(): ?string
    {
        return $this->code;
    }

    /**
     * @param string|null $code
     */
    public function setCode(?string $code): void
    {
        $this->code = $code;
    }

    /**
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * @param string|null $description
     */
    public function setDescription(?string $description): void
    {
        $this->description = $description;
    }

    /**
     * @return bool
     */
    public function isDeleted(): bool
    {
        return $this->isDeleted;
    }

    /**
     * @param bool $isDeleted
     */
    public function setIsDeleted(bool $isDeleted): void
    {
        $this->isDeleted = $isDeleted;
    }

    /**
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @param string|null $name
     */
    public function setName(?string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return string|null
     */
    public function getSeoDescription(): ?string
    {
        return $this->seoDescription;
    }

    /**
     * @param string|null $seoDescription
     */
    public function setSeoDescription(?string $seoDescription): void
    {
        $this->seoDescription = $seoDescription;
    }

    /**
     * @return string|null
     */
    public function getSeoKeywords(): ?string
    {
        return $this->seoKeywords;
    }

    /**
     * @param string|null $seoKeywords
     */
    public function setSeoKeywords(?string $seoKeywords): void
    {
        $this->seoKeywords = $seoKeywords;
    }

    /**
     * @return string|null
     */
    public function getSeoText(): ?string
    {
        return $this->seoText;
    }

    /**
     * @param string|null $seoText
     */
    public function setSeoText(?string $seoText): void
    {
        $this->seoText = $seoText;
    }

    /**
     * @return string|null
     */
    public function getSeoTitle(): ?string
    {
        return $this->seoTitle;
    }

    /**
     * @param string|null $seoTitle
     */
    public function setSeoTitle(?string $seoTitle): void
    {
        $this->seoTitle = $seoTitle;
    }

    /**
     * @return string|null
     */
    public function getIsIncludedInMenu(): ?string
    {
        return $this->isIncludedInMenu;
    }

    /**
     * @param string|null $isIncludedInMenu
     */
    public function setIsIncludedInMenu(?string $isIncludedInMenu): void
    {
        $this->isIncludedInMenu = $isIncludedInMenu;
    }

    /**
     * @return int
     */
    public function getOrder(): int
    {
        return $this->order;
    }

    /**
     * @param int $order
     */
    public function setOrder(int $order): void
    {
        $this->order = $order;
    }

    /**
     * @return string|null
     */
    public function getParentId(): ?string
    {
        return $this->parent_id;
    }

    /**
     * @param string|null $parent_id
     */
    public function setParentId(?string $parent_id): void
    {
        $this->parent_id = $parent_id;
    }




}