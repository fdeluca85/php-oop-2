<?php
class User
{
    private $name;
    private $lastname;
    private $cardNumber;
    private $birthday;
    private $address;
    private $email;

    public function __construct($_name, $_lastname, $_email)
    {
        $this->name = $_name;
        $this->lastname = $_lastname;
        $this->cardNumber = $_email;
    }
    public function getName()
    {
        return $this->name;
    }

    public function getlastName()
    {
        return $this->lastname;
    }

    public function getEmail()
    {
        return $this->email;
    }
}
