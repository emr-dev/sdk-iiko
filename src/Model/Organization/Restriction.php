<?php

namespace IikoSDK\Model\Organization;

class Restriction
{
    /*
     * Минимальная сумма доставки
     */
    private string $minSum;
    /*
     * Время доставки
     */
    private string $deliveryDurationInMinutes;
    private string $name;

    /** Coordinate object */
    private \ArrayObject $coordinates;



    public function __construct()
    {
        $this->coordinates = new \ArrayObject();
    }

    /**
     * @return \ArrayObject
     */
    public function getCoordinates(): \ArrayObject
    {
        return $this->coordinates;
    }

    /**
     * @param \ArrayObject $coordinates
     */
    public function setCoordinates(\ArrayObject $coordinates): void
    {
        $this->coordinates = $coordinates;
    }




    /**
     * @return string
     */
    public function getMinSum(): string
    {
        return $this->minSum;
    }

    /**
     * @param string $minSum
     */
    public function setMinSum(string $minSum): void
    {
        $this->minSum = $minSum;
    }

    /**
     * @return string
     */
    public function getDeliveryDurationInMinutes(): string
    {
        return $this->deliveryDurationInMinutes;
    }

    /**
     * @param string $deliveryDurationInMinutes
     */
    public function setDeliveryDurationInMinutes(string $deliveryDurationInMinutes): void
    {
        $this->deliveryDurationInMinutes = $deliveryDurationInMinutes;
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