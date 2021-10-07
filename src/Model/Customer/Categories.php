<?php

namespace IikoSDK\Model\Customer;

class Categories
{
    /**
     * @var Category[] The customer category
     */
    private $list;


    public function __construct(Category ...$category)
    {
        $this->list = $category;
    }




    /**
     * Add customer category
     *
     * @param Category $category The customer category
     *
     * @return void
     */
    public function add(Category $category): void
    {
        $this->list[] = $category;
    }

    /**
     * Get all customer category.
     *
     * @return Category[] The customer category
     */
    public function all(): array
    {
        return $this->list;
    }



}