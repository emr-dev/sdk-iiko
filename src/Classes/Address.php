<?php

namespace IikoSDK\Classes;

use Exception;
use IikoSDK\Client;
use IikoSDK\Helper\Request;
use IikoSDK\Model\Address\City;
use IikoSDK\Model\Address\Street;

class Address
{


    const PATH = 'cities/';
    const METHOD_GET_ADDRESS_BOOK = self::PATH.'cities';
    const METHOD_GET_ADDRESS_BOOK_ORGANIZATION = self::PATH.'citiesList';


    private  Client $client;

    public function __construct(Client $client)
    {
        $this->client = $client;

        if(!$this->client->getOrganization()){
            throw new Exception('Введите GUID оргонизации');
        }

    }




    public function getBook(): \ArrayObject
    {
        $request = new Request();
        $request->setType('GET');
        $request->setMethod(self::METHOD_GET_ADDRESS_BOOK);
        $request->addParameter('access_token', $this->client->getAuthorization()->getToken());
        $request->addParameter('organization', $this->client->getOrganization());
        $response = $request->execute()->toArray();
        $data = new \ArrayObject();
        foreach ($response as $city_value){
            $city = new City();
            $city->setName($city_value['city']['name']);
            $city->setId($city_value['city']['id']);
            $city->setClassifierId($city_value['city']['classifierId']);
            $city->setDeleted($city_value['city']['deleted']);
            $city->setExternalRevision($city_value['city']['externalRevision']);
            foreach ($city_value['streets'] as $street_value){
                $street = new Street();
                $street->setId($street_value['id']);
                $street->setName($street_value['name']);
                $street->setDeleted($street_value['deleted']);
                $street->setExternalRevision($street_value['externalRevision']);
                $street->setCity($city);
                $city->getStreets()->append($street);
            }
            $data->append($city);
        }
        return $data;
    }


    public function getCitiesOrganization(): \ArrayObject
    {
        $request = new Request();
        $request->setType('GET');
        $request->setMethod(self::METHOD_GET_ADDRESS_BOOK_ORGANIZATION);
        $request->addParameter('access_token', $this->client->getAuthorization()->getToken());
        $request->addParameter('organization', $this->client->getOrganization());
        $response = $request->execute()->toArray();


        $data = new \ArrayObject();
        foreach ($response as $city_value){
            $city = new City();
            $city->setName($city_value['name']);
            $city->setId($city_value['id']);
            $city->setClassifierId($city_value['classifierId']);
            $city->setDeleted($city_value['deleted']);
            $city->setExternalRevision($city_value['externalRevision']);
        }
        $data->append($city);
        return $data;
    }




}