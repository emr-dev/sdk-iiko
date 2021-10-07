<?php

namespace IikoSDK\Model\Customer;

class Wallets
{
    /**
     * @var WalletBalance[] The customer wallet
     */
    private $list;


    public function __construct(WalletBalance ...$walletBalance)
    {
        $this->list = $walletBalance;
    }


    /**
     * Add customer wallet
     *
     * @param WalletBalance $walletBalance The customer wallet
     *
     * @return void
     */
    public function add(WalletBalance $walletBalance): void
    {
        $this->list[] = $walletBalance;
    }

    /**
     * Get all customer wallet.
     *
     * @return WalletBalance[] The customer wallet
     */
    public function all(): array
    {
        return $this->list;
    }



}