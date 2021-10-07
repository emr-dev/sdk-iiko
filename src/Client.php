<?php

namespace IikoSDK;

use IikoSDK\Classes\Address;
use IikoSDK\Classes\Authorization;
use IikoSDK\Classes\Customer;
use IikoSDK\Classes\Nomenclature;
use IikoSDK\Classes\Organization;
use IikoSDK\Model\AuthData;
use IikoSDK\System\Common;

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
     * @return  Organization|organization
     * @throws \Exception
     */
    public function organization()
    {
        return  new Organization($this);
    }

    /**
     * @return  Nomenclature
     */
    public function nomenclature()
    {
        return  new  Nomenclature($this);
    }

}