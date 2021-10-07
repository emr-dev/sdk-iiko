<?php

namespace IikoSDK\System;

use IikoSDK\Classes\Authorization;

class Common
{


    private Authorization $authorization;

    /**
     * @return Authorization
     */
    public function getAuthorization(): Authorization
    {
        return $this->authorization;
    }

    /**
     * @param Authorization $authorization
     */
    public function setAuthorization(Authorization $authorization): void
    {
        $this->authorization = $authorization;
    }


    private string  $organization;

    /**
     * @return string
     */
    public function getOrganization(): string
    {
        return $this->organization;
    }

    /**
     * @param string $organization
     */
    public function setOrganization(string $organization): void
    {
        $this->organization = $organization;
    }


}