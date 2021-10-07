<?php
namespace IikoSDK\Model\Address;
class Street
{
    private string $id;
    private string $classifierId;
    private City $city;
    private string $name;
    private bool $deleted = false;
    private string $externalRevision;

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
     * @return string
     */
    public function getClassifierId(): string
    {
        return $this->classifierId;
    }

    /**
     * @param string $classifierId
     */
    public function setClassifierId(string $classifierId): void
    {
        $this->classifierId = $classifierId;
    }

    /**
     * @return City
     */
    public function getCity(): City
    {
        return $this->city;
    }

    /**
     * @param City $city
     */
    public function setCity(City $city): void
    {
        $this->city = $city;
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

    /**
     * @return bool
     */
    public function isDeleted(): bool
    {
        return $this->deleted;
    }

    /**
     * @param bool $deleted
     */
    public function setDeleted(bool $deleted): void
    {
        $this->deleted = $deleted;
    }

    /**
     * @return string
     */
    public function getExternalRevision(): string
    {
        return $this->externalRevision;
    }

    /**
     * @param string $externalRevision
     */
    public function setExternalRevision(string $externalRevision): void
    {
        $this->externalRevision = $externalRevision;
    }




}