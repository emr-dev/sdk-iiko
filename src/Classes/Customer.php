<?php

namespace Classes;

use Exception;
use Helper\Request;
use Model\Customer\Categories;
use Model\Customer\Category;
use Model\Customer\WalletBalance;
use Model\Customer\Wallets;
use System\Common;

class Customer
{
    const PATH = 'customers/';
    const METHOD_GET_BY_PHONE = self::PATH.'get_customer_by_phone';
    const METHOD_GET_BY_ID = self::PATH.'get_customer_by_id';
    const METHOD_GET_CREATE_UPDATE = self::PATH.'create_or_update';


    private  \Client $client;

    public function __construct(\Client $client)
    {
        $this->client = $client;

        if(!$this->client->getOrganization()){
            throw new Exception('Введите GUID оргонизации');
        }

    }


    /*
     * Получение объека плкупателя из результата api
     */
    private function mapping($response){
        $customer = new \Model\Customer\Customer();
        $customer->setId($response['id']);
        $customer->setEmail($response['email']);
        $customer->setName($response['name']);
        $customer->setMiddleName($response['middleName']);
        $customer->setSurname($response['surname']);
        $customer->setPhone($response['phone']);
        $customer->setBirthday($response['birthday']);
        $customer->setSex($response['sex']);
        $customer->setComment($response['comment']);
        $customer->setIsBlocked($response['isBlocked']);
        $customer->setIsDeleted($response['isDeleted']);
        $customer->setReferrerId($response['referrerId']);
        $customer->setOrdersSum($response['iikoCardOrdersSum']);
        $customer->setRank($response['rank']);
        $wallets = new Wallets();
        foreach ($response['walletBalances'] as $item){
            $walletBalance = new WalletBalance();
            $walletBalance->setBalance($item['balance']);
            if($item['wallet']){
                $walletBalance->setName($item['wallet']['name']);
                $walletBalance->setId($item['wallet']['id']);
                $walletBalance->setProgramType($item['wallet']['programType']);
                $walletBalance->setType($item['wallet']['type']);
            }
            $wallets->add($walletBalance);
        }
        $customer->setWallets($wallets);

        $categories = new Categories();
        foreach ($response['categories'] as $item){
            $category = new Category();
            $category->setId($item['id']);
            $category->setIsActive($item['isActive']);
            $category->setIsDefaultForNewGuests($item['isDefaultForNewGuests']);
            $category->setName($item['name']);
            $categories->add($category);
        }
        $customer->setCategories($categories);



        return $customer;
    }


    /*
     *
     * Получить данные гостя по его номеру телефона
    */
    public function getByPhone(string $phone): \Model\Customer\Customer
    {
        $request = new Request();
        $request->setType('GET');
        $request->setMethod(self::METHOD_GET_BY_PHONE);
        $request->addParameter('access_token', $this->client->getAuthorization()->getToken());
        $request->addParameter('organization', $this->client->getOrganization());
        $request->addParameter('phone', $phone);
        $response = $request->execute()->toArray();
        if(isset($response['httpStatusCode'])){
            throw new Exception($response);
        }
        return $this->mapping($response);
    }

    /*
      * Получить данные гостя по его идентификатору
    */
    public function getById(string $id): \Model\Customer\Customer
    {
        $request = new Request();
        $request->setType('GET');
        $request->setMethod(self::METHOD_GET_BY_ID);
        $request->addParameter('access_token', $this->client->getAuthorization()->getToken());
        $request->addParameter('organization', $this->client->getOrganization());
        $request->addParameter('id', $id);
        $response = $request->execute()->toArray();
        if(isset($response['exception'])){
            throw new Exception($response['message']);
        }
        return $this->mapping($response);
    }


    /*
     * Создать пользователя или обновление пользователя
    */
    public function create_update(\Model\Customer\Customer $customer){
        $data = [];
        if($customer->getId()){
            $data['id'] = $customer->getId();
        }
        if($customer->getName()){
            $data['name'] = $customer->getName();
        }
        if($customer->getPhone()){
            $data['phone'] = $customer->getPhone();
        }
        if($customer->getEmail()){
            $data['email'] = $customer->getEmail();
        }
        if($customer->getMiddleName()){
            $data['middleName'] = $customer->getMiddleName();
        }
        if($customer->getSurname()){
            $data['surName'] = $customer->getSurname();
        }
        if($customer->getSex()){
            $data['sex'] = $customer->getSex();
        }
        if($customer->getReferrerId()){
            $data['referrerId'] = $customer->getReferrerId();
        }
        if($customer->getReferrerId()){
            $data['referrerId'] = $customer->getReferrerId();
        }
        $request = new Request();
        $request->setType('POST');
        $request->setMethod(self::METHOD_GET_CREATE_UPDATE);
        $request->addParameter('access_token', $this->client->getAuthorization()->getToken());
        $request->addParameter('organization', $this->client->getOrganization());
        $request->setBody(json_encode(['customer'=>$data]));
        $request->addHeader('Content-Type','application/json');
        return $request->execute()->clearResponse();
    }



}