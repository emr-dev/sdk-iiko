<?php

namespace Model;

class AuthData implements \JsonSerializable
{

    public string $login;
    public string $password;

    /**
     * @return string
     */
    public function getLogin(): string
    {
        return $this->login;
    }

    /**
     * @param string $login
     */
    public function setLogin(string $login): void
    {
        $this->login = $login;
    }

    /**
     * @return string
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    /**
     * @param string $password
     */
    public function setPassword(string $password): void
    {
        $this->password = $password;
    }






    public function jsonSerialize()
    {
        return [
            'login' => $this->getLogin(),
            'password' => $this->getPassword(),
        ];
    }
}