<?php

namespace Model\Organization;


class Terminal
{
    private string $id;
    private string $address;
    private string $name;
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
    public function getAddress(): string
    {
        return $this->address;
    }

    /**
     * @param string $address
     */
    public function setAddress(string $address): void
    {
        $this->address = $address;
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