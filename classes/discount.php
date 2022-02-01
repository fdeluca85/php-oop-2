<?php

class UserVip extends User
{
    private $discount;
    private $status;



    public function __construct($_discount, $_status)
    {
        $this->discount = $_discount;
        $this->status = $_status;
    }

    public function getdiscount()
    {
        return $this->discount;
    }
    public function getStatus()
    {
        return $this->status;
    }
    //SCONTO
    public function setDiscount($_status)
    {
        if ($_status === "Vip") {
            $this->discount = 40;
        } else if ($_status === "Normal") {
            $this->discount = 10;
        }
    }
}
