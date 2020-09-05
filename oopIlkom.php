<?php

class Laptop
{
    public $pemilik; //ini property
    public $merk; //ini property


    public function hidupkan_laptop() //ini method
    {
        return "hidupkan laptop $this->merk punya $this->pemilik";
    }

    public function matikan_laptop()
    {
        return "matikan laptop $this->merk punya $this->pemilik";
    }

    public function restart_laptop()
    {
        $matikan = $this->matikan_laptop();
        $hidupkan = $this->hidupkan_laptop();
        $restart = $matikan . "<br>" . $hidupkan;
        return $restart;
    }
}

$laptop_anto = new Laptop(); //ini object

$laptop_anto->pemilik = "Anto";
$laptop_anto->merk = "Asus";

echo "hidupkan laptop : " . $laptop_anto->hidupkan_laptop();

echo "<br>";

echo "restart laptop : " . $laptop_anto->restart_laptop();
