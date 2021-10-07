<?php

namespace IikoSDK\Model\Customer;

class Category
{
    private string $id;
    private bool $isActive;
    private bool $isDefaultForNewGuests;
    private string $name;

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
     * @return bool
     */
    public function isActive(): bool
    {
        return $this->isActive;
    }

    /**
     * @param bool $isActive
     */
    public function setIsActive(bool $isActive): void
    {
        $this->isActive = $isActive;
    }

    /**
     * @return bool
     */
    public function isDefaultForNewGuests(): bool
    {
        return $this->isDefaultForNewGuests;
    }

    /**
     * @param bool $isDefaultForNewGuests
     */
    public function setIsDefaultForNewGuests(bool $isDefaultForNewGuests): void
    {
        $this->isDefaultForNewGuests = $isDefaultForNewGuests;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }




}