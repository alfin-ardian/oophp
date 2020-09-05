<?php

class komputer
{
    public $merk = "acer";

    public function lihat_spec()
    {
        return "Spec Komputer: Acer, Processor Intel core i7, RAM 4 GB";
    }
}
class laptop extends Komputer
{
    public $merk = "asus";

    public function lihat_spec()
    {
        return "Spec Laptop: Asus, Processor Intel core i5, RAM 2 GB";
    }

    public function lihat_spec_komputer()
    {
        return parent::lihat_spec();
    }

    public function lihat_merk_komputer()
    {
        return parent::$merk;
    }
}

$laptop_baru = new laptop();

echo $laptop_baru->lihat_spec();
echo "<br>";
echo $laptop_baru->lihat_spec_komputer();
echo "<br />";
