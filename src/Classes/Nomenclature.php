<?php

namespace Classes;

use Exception;
use Helper\Request;
use Model\Nomenclature\Category;
use Model\Nomenclature\Group;
use Model\Nomenclature\Product;

class Nomenclature
{

    const PATH = 'nomenclature/';


    private  \Client $client;
    private array $data;

    public function __construct(\Client $client)
    {
        $this->client = $client;

        if(!$this->client->getOrganization()){
            throw new Exception('Введите GUID оргонизации');
        }

        $this->data = $this->getData();

    }



    private function getData(){
        $request = new Request();
        $request->setType('GET');
        $request->setMethod(self::PATH.$this->client->getOrganization());
        $request->addParameter('access_token', $this->client->getAuthorization()->getToken());
        $response = $request->execute()->toArray();

        return $response;
    }

    public function getGroups(){
        $groups = new \ArrayObject();
        foreach ($this->data['groups'] as $datum){
            $group = new Group();
            $group->setId($datum['id']);
            $group->setCode($datum['code']);
            $group->setDescription($datum['description']);
            $group->setIsDeleted($datum['isDeleted']);
            $group->setIsDeleted($datum['isDeleted']);
            $group->setName($datum['name']);
            $group->setSeoDescription($datum['seoDescription']);
            $group->setSeoText($datum['seoText']);
            $group->setSeoTitle($datum['seoTitle']);
            $group->setIsIncludedInMenu($datum['isIncludedInMenu']);
            $group->setOrder($datum['order']);
            $group->setParentId($datum['parentGroup']);
            $groups->append($group);
        }
        return $groups;
    }

    public function getCategories(){
        $categories = new \ArrayObject();
        foreach ($this->data['productCategories'] as $datum){
            $category = new Category();
            $category->setId($datum['id']);
            $category->setName($datum['name']);
            $categories->append($category);
        }
        return $categories;
    }


    public function getProducts(){
        $products = new \ArrayObject();
        foreach ($this->data['products'] as $datum){
            $product = new Product();
            $product->setId($datum['id']);
            $product->setCode($datum['code']);
            $product->setDescription($datum['description']);
            $product->setIsDeleted($datum['isDeleted']);
            $product->setName($datum['name']);
            $product->setSeoDescription($datum['seoDescription']);
            $product->setSeoKeywords($datum['seoKeywords']);
            $product->setSeoText($datum['seoText']);
            $product->setSeoTitle($datum['seoTitle']);
            $product->setTags($datum['tags']);
            $product->setCarbohydrateAmount($datum['carbohydrateAmount']);
            $product->setCarbohydrateFullAmount($datum['carbohydrateFullAmount']);
            $product->setDoNotPrintInCheque($datum['doNotPrintInCheque']);
            $product->setEnergyAmount($datum['energyAmount']);
            $product->setEnergyFullAmount($datum['energyFullAmount']);
            $product->setFatAmount($datum['fatAmount']);
            $product->setFatFullAmount($datum['fatFullAmount']);
            $product->setFiberAmount($datum['fiberAmount']);
            $product->setFatFullAmount($datum['fiberFullAmount']);
            $product->setPrice($datum['price']);
            $product->setCategoryId($datum['productCategoryId']);
            $product->setType($datum['type']);
            $product->setWeight($datum['weight']);
            $image = end($datum['images']);
            $product->setImageUrl((isset($image['imageUrl']))?$image['imageUrl']:null);
            $product->setIsIncludedInMenu($datum['isIncludedInMenu']);
            $product->setOrder($datum['order']);
            $product->setGroupId($datum['parentGroup']);
            $products->append($product);
        }

        return $products;
    }



}