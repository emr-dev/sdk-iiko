<?php

namespace Classes;

use Exception;
use Helper\Request;
use Model\Organization\Coordinate;
use Model\Organization\Restriction;
use Model\Organization\Terminal;

class Organization
{

    const METHOD_GET_DELIVERY_TERMINALS = 'deliverySettings/getDeliveryTerminals';
    const METHOD_GET_DELIVERY_RESTRICTIONS = 'deliverySettings/getDeliveryRestrictions';


    private  \Client $client;

    public function __construct(\Client $client)
    {
        $this->client = $client;

        if(!$this->client->getOrganization()){
            throw new Exception('Введите GUID оргонизации');
        }

    }

    public function  getDeliveryTerminals(){
        $request = new Request();
        $request->setType('GET');
        $request->setMethod(self::METHOD_GET_DELIVERY_TERMINALS);
        $request->addParameter('access_token', $this->client->getAuthorization()->getToken());
        $request->addParameter('organization', $this->client->getOrganization());
        $result = $request->execute()->toArray();

        $data = new \ArrayObject();

        foreach ($result['deliveryTerminals'] as $item){
            $terminal = new Terminal();
            $terminal->setId($item['deliveryTerminalId']);
            $terminal->setName($item['name']);
            $terminal->setExternalRevision($item['externalRevision']);
            $terminal->setAddress($item['address']);
            $data->append($terminal);
        }
        return $data;

    }


    public function getDeliveryRestriction(string $terminal_id){
        $request = new Request();
        $request->setType('GET');
        $request->setMethod(self::METHOD_GET_DELIVERY_RESTRICTIONS);
        $request->addParameter('access_token', $this->client->getAuthorization()->getToken());
        $request->addParameter('organization', $this->client->getOrganization());
        $response = $request->execute()->toArray();


        $restriction = null;
        foreach ($response['restrictions'] as $restriction_item){
            if($restriction_item['deliveryTerminalId'] == $terminal_id and  $restriction_item['organizationId'] == $this->client->getOrganization()){
                $restriction = new Restriction();
                $restriction->setMinSum($restriction_item['minSum']);
                $restriction->setName($restriction_item['zone']);
                foreach ($response['deliveryZones'] as $deliveryZone){
                       if($deliveryZone['name'] == $restriction->getName() ){
                           foreach ($deliveryZone['coordinates'] as $coordinate_item){
                               $coordinate = new Coordinate();
                               $coordinate->setLatitude($coordinate_item['latitude']);
                               $coordinate->setLongitude($coordinate_item['longitude']);
                               $restriction->getCoordinates()->append($coordinate);
                           }
                       }
                }
                break;
            }
        }
        if(!$restriction){
            throw new Exception('По заданному GUID Terminal не удалось найти полигоны');
        }

        return $restriction;
    }



}