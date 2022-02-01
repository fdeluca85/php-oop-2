<?php
class User
{
    private $name;
    private $lastname;
    private $cardNumber;
    private $yob;   // anno di nascita
    private $email;
    private $status;

    public function __construct($_name, $_lastname, $_email, $_status)
    {
        $this->name = $_name;
        $this->lastname = $_lastname;
        $this->email = $_email;
        $this->status = $_status;
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
    public function getStatus()
    {
        return $this->status;
    }
}
