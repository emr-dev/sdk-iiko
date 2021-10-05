<?php

namespace Model\Nomenclature;

class Product
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
    private ?string $tags;
    private float $carbohydrateAmount = 0;
    private float $carbohydrateFullAmount = 0;
    private bool $doNotPrintInCheque = false;
    private float $energyAmount = 0;
    private float $energyFullAmount = 0;
    private float $fatAmount = 0;
    private float $fatFullAmount = 0;
    private float $fiberAmount = 0;
    private float $fiberFullAmount = 0;
    private float $price = 0;
    private ?string $categoryId;
    private  string $type;
    private float $weight = 0;
    private bool $isIncludedInMenu = false;
    private int $order = 0;
    private ?string $groupId;
    private ?string $imageUrl;

    /**
     * @return float|int
     */
    public function getFiberAmount()
    {
        return $this->fiberAmount;
    }

    /**
     * @param float|int $fiberAmount
     */
    public function setFiberAmount($fiberAmount): void
    {
        $this->fiberAmount = $fiberAmount;
    }

    /**
     * @return float|int
     */
    public function getFiberFullAmount()
    {
        return $this->fiberFullAmount;
    }

    /**
     * @param float|int $fiberFullAmount
     */
    public function setFiberFullAmount($fiberFullAmount): void
    {
        $this->fiberFullAmount = $fiberFullAmount;
    }




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
    public function getTags(): ?string
    {
        return $this->tags;
    }

    /**
     * @param string|null $tags
     */
    public function setTags(?string $tags): void
    {
        $this->tags = $tags;
    }

    /**
     * @return float|int
     */
    public function getCarbohydrateAmount()
    {
        return $this->carbohydrateAmount;
    }

    /**
     * @param float|int $carbohydrateAmount
     */
    public function setCarbohydrateAmount($carbohydrateAmount): void
    {
        $this->carbohydrateAmount = $carbohydrateAmount;
    }

    /**
     * @return float|int
     */
    public function getCarbohydrateFullAmount()
    {
        return $this->carbohydrateFullAmount;
    }

    /**
     * @param float|int $carbohydrateFullAmount
     */
    public function setCarbohydrateFullAmount($carbohydrateFullAmount): void
    {
        $this->carbohydrateFullAmount = $carbohydrateFullAmount;
    }

    /**
     * @return bool
     */
    public function isDoNotPrintInCheque(): bool
    {
        return $this->doNotPrintInCheque;
    }

    /**
     * @param bool $doNotPrintInCheque
     */
    public function setDoNotPrintInCheque(bool $doNotPrintInCheque): void
    {
        $this->doNotPrintInCheque = $doNotPrintInCheque;
    }

    /**
     * @return float|int
     */
    public function getEnergyAmount()
    {
        return $this->energyAmount;
    }

    /**
     * @param float|int $energyAmount
     */
    public function setEnergyAmount($energyAmount): void
    {
        $this->energyAmount = $energyAmount;
    }

    /**
     * @return float|int
     */
    public function getEnergyFullAmount()
    {
        return $this->energyFullAmount;
    }

    /**
     * @param float|int $energyFullAmount
     */
    public function setEnergyFullAmount($energyFullAmount): void
    {
        $this->energyFullAmount = $energyFullAmount;
    }

    /**
     * @return float|int
     */
    public function getFatAmount()
    {
        return $this->fatAmount;
    }

    /**
     * @param float|int $fatAmount
     */
    public function setFatAmount($fatAmount): void
    {
        $this->fatAmount = $fatAmount;
    }

    /**
     * @return float|int
     */
    public function getFatFullAmount()
    {
        return $this->fatFullAmount;
    }

    /**
     * @param float|int $fatFullAmount
     */
    public function setFatFullAmount($fatFullAmount): void
    {
        $this->fatFullAmount = $fatFullAmount;
    }

    /**
     * @return float|int
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param float|int $price
     */
    public function setPrice($price): void
    {
        $this->price = $price;
    }

    /**
     * @return string|null
     */
    public function getCategoryId(): ?string
    {
        return $this->categoryId;
    }

    /**
     * @param string|null $categoryId
     */
    public function setCategoryId(?string $categoryId): void
    {
        $this->categoryId = $categoryId;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @param string $type
     */
    public function setType(string $type): void
    {
        $this->type = $type;
    }

    /**
     * @return float|int
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * @param float|int $weight
     */
    public function setWeight($weight): void
    {
        $this->weight = $weight;
    }

    /**
     * @return bool
     */
    public function isIncludedInMenu(): bool
    {
        return $this->isIncludedInMenu;
    }

    /**
     * @param bool $isIncludedInMenu
     */
    public function setIsIncludedInMenu(bool $isIncludedInMenu): void
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
    public function getGroupId(): ?string
    {
        return $this->groupId;
    }

    /**
     * @param string|null $groupId
     */
    public function setGroupId(?string $groupId): void
    {
        $this->groupId = $groupId;
    }

    /**
     * @return string|null
     */
    public function getImageUrl(): ?string
    {
        return $this->imageUrl;
    }

    /**
     * @param string|null $imageUrl
     */
    public function setImageUrl(?string $imageUrl): void
    {
        $this->imageUrl = $imageUrl;
    }



}