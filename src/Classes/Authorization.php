<?php

namespace IikoSDK\Classes;

use Exception;
use IikoSDK\Helper\Request;
use IikoSDK\Model\AuthData;

class Authorization
{

    const PATH = 'auth/access_token';
    public string $token;


    private AuthData $auth;
    public function __construct(AuthData $auth)
    {
        $this->auth = $auth;
        $this->init();
    }


    private function init(){
        $request = new Request();
        $request->setType('GET');
        $request->setMethod(self::PATH);
        $request->addParameter('user_id',$this->auth->getLogin());
        $request->addParameter('user_secret',$this->auth->getPassword());
        $response = $request->execute()->getResponse();
        if(isset($response['code'])){
            throw new Exception($response);
        }
        $this->token = (str_replace('"','',$response));

    }

    /**
     * @return string
     */
    public function getToken(): string
    {
        return $this->token;
    }









}