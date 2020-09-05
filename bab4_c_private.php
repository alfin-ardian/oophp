<?php
//enkapsulasi private
//hanya bisa di akses di class itu sendiri
//class lain tidak bisa akses termasuk turunan

class laptop
{
    private $jenis_prosesor = "intel core i7";

    public function tampilkan_prosesor()
    {
        return $this->jenis_prosesor;
    }
}

class komputer extends laptop
{
    public function tampilkan_prosesor()
    {
        return $this->jenis_prosesor;
    }
}

$laptop_baru = new laptop();
$komputer_baru = new komputer();

echo $laptop_baru->tampilkan_prosesor();
echo $komputer_baru->tampilkan_prosesor();
