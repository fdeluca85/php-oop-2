<?php
class User
{
    private $name;
    private $lastname;
    private $cardNumber;
    private $birthday;
    private $address;
    private $phoneNumber;

    public function __construct($_name, $_lastname, $_cardNumber)
    {
        $this->name = $_name;
        $this->lastname = $_lastname;
        $this->cardNumber = $_cardNumber;
    }
}
