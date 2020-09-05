<?php
//penggunaan pseudo variabel $this

class laptop
{
    public $pemilik;
    public $merk;


    public function hidupkan_laptop()
    {
        return "hidupkan laptop $this->merk milik $this->pemilik";
    }

    public function matikan_laptop()
    {
        return "matikan laptop $this->merk milik $this->pemilik";
    }
    public function restart_laptop()
    {
        $matikan = $this->matikan_laptop();
        $hidupkan = $this->hidupkan_laptop();
        $restart = $matikan . "<br />" . $hidupkan;
        return $restart;
    }
}

$laptop_baru = new laptop();
$laptop_baru->pemilik = "andi";
$laptop_baru->merk = "asus";

echo $laptop_baru->hidupkan_laptop();

echo "<br />";

echo $laptop_baru->restart_laptop();
