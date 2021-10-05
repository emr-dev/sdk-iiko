<?php

use Classes\Address;
use Classes\Authorization;
use Classes\Customer;
use Model\AuthData;
use System\Common;

class Client extends Common
{

    public function __construct(AuthData $auth)
    {
        $this->setAuthorization(new Authorization($auth));
    }

    /**
     * @return Customer
     */
    public function customer(): Customer
    {
        return  new Customer($this);
    }


    /**
     * @return Address
     * @throws Exception
     */
    public function address(): Address
    {
        return  new Address($this);
    }


    /**
     * @return \Classes\Organization|organization
     * @throws Exception
     */
    public function organization()
    {
        return  new \Classes\Organization($this);
    }

    /**
     * @return \Classes\Nomenclature
     * @throws Exception
     */
    public function nomenclature()
    {
        return  new \Classes\Nomenclature($this);
    }

}