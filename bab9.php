<?php
//inheritance / pewarisan
//adalah konsep yang memungkinkan class dapat menurunkan property dan method dari class lain

class komputer
{
    public $merk;
    public $memory;
    public $prosesor;

    public function beli_laptop()
    {
        return "beli laptop baru";
    }
}

class laptop extends komputer
{
    public function lihat_spec()
    {
        return "memory $this->memory, merk $this->merk, prosesor $this->prosesor";
    }
}

$laptop = new laptop();
$laptop->merk = "asus";
$laptop->memory = "4 gb";
$laptop->prosesor = "intel core i7";

echo $laptop->lihat_spec();
echo "<br/>";
echo $laptop->beli_laptop();
