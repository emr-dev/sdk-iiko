<?php

namespace IikoSDK\Model\Customer;

class Customer
{
    /**
     * @var string
     */
    private string $id;
    /**
     * @var ?string
     */
    private ?string $email = null;
    /**
     * @var ?string
     */
    private ?string $name = null;
    /**
     * @var ?string
     */
    private ?string $middleName = null;
    /**
     * @var ?string
     */
    private ?string $surname = null;

    /**
     * @var string
     */
    private string $phone;
    /**
     * @var ?string
     */
    private ?string $birthday = null;
    /**
     * @var int
     */
    private int $sex = 0;
    /**
     * @var ?string
     */
    private ?string $comment = null;
    /**
     * @var bool
     */
    private bool $isBlocked = false;
    /**
     * @var bool
     */
    private bool $isDeleted = false;
    /**
     * @var ?string
     */
    private ?string $referrerId = null;
    /**
     * @var ?string Сумма заказов из iikoCard
     */
    private ?string $ordersSum = null;
    /**
     * @var ?string
     */
    private ?string $rank = null;
    /**
     * @var Wallets
     */
    private Wallets $wallets;

    /**
     * @var Categories
     */
    private Categories $categories;

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @param string $id
     */
    public function setId(string $id): void
    {
        $this->id = $id;
    }

    /**
     * @return string|null
     */
    public function getEmail(): ?string
    {
        return $this->email;
    }

    /**
     * @param string|null $email
     */
    public function setEmail(?string $email): void
    {
        $this->email = $email;
    }

    /**
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @param string|null $name
     */
    public function setName(?string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return string|null
     */
    public function getMiddleName(): ?string
    {
        return $this->middleName;
    }

    /**
     * @param string|null $middleName
     */
    public function setMiddleName(?string $middleName): void
    {
        $this->middleName = $middleName;
    }

    /**
     * @return string|null
     */
    public function getSurname(): ?string
    {
        return $this->surname;
    }

    /**
     * @param string|null $surname
     */
    public function setSurname(?string $surname): void
    {
        $this->surname = $surname;
    }

    /**
     * @return string
     */
    public function getPhone(): string
    {
        return $this->phone;
    }

    /**
     * @param string $phone
     */
    public function setPhone(string $phone): void
    {
        $this->phone = $phone;
    }

    /**
     * @return string|null
     */
    public function getBirthday(): ?string
    {
        return $this->birthday;
    }

    /**
     * @param string|null $birthday
     */
    public function setBirthday(?string $birthday): void
    {
        $this->birthday = $birthday;
    }

    /**
     * @return int
     */
    public function getSex(): int
    {
        return $this->sex;
    }

    /**
     * @param int $sex
     */
    public function setSex(int $sex): void
    {
        $this->sex = $sex;
    }

    /**
     * @return string|null
     */
    public function getComment(): ?string
    {
        return $this->comment;
    }

    /**
     * @param string|null $comment
     */
    public function setComment(?string $comment): void
    {
        $this->comment = $comment;
    }

    /**
     * @return bool
     */
    public function isBlocked(): bool
    {
        return $this->isBlocked;
    }

    /**
     * @param bool $isBlocked
     */
    public function setIsBlocked(bool $isBlocked): void
    {
        $this->isBlocked = $isBlocked;
    }

    /**
     * @return bool
     */
    public function isDeleted(): bool
    {
        return $this->isDeleted;
    }

    /**
     * @param bool $isDeleted
     */
    public function setIsDeleted(bool $isDeleted): void
    {
        $this->isDeleted = $isDeleted;
    }

    /**
     * @return string|null
     */
    public function getReferrerId(): ?string
    {
        return $this->referrerId;
    }

    /**
     * @param string|null $referrerId
     */
    public function setReferrerId(?string $referrerId): void
    {
        $this->referrerId = $referrerId;
    }

    /**
     * @return string|null
     */
    public function getOrdersSum(): ?string
    {
        return $this->ordersSum;
    }

    /**
     * @param string|null $ordersSum
     */
    public function setOrdersSum(?string $ordersSum): void
    {
        $this->ordersSum = $ordersSum;
    }

    /**
     * @return string|null
     */
    public function getRank(): ?string
    {
        return $this->rank;
    }

    /**
     * @param string|null $rank
     */
    public function setRank(?string $rank): void
    {
        $this->rank = $rank;
    }

    /**
     * @return Wallets
     */
    public function getWallets(): Wallets
    {
        return $this->wallets;
    }

    /**
     * @param Wallets $wallets
     */
    public function setWallets(Wallets $wallets): void
    {
        $this->wallets = $wallets;
    }

    /**
     * @return Categories
     */
    public function getCategories(): Categories
    {
        return $this->categories;
    }

    /**
     * @param Categories $categories
     */
    public function setCategories(Categories $categories): void
    {
        $this->categories = $categories;
    }



}