<?php
//membuat dan mengakses object dalam php
class laptop
{
    var $pemilik;
    var $merk;
    var $ukuran_layar;

    //membuat method
    function hidupkan_laptop()
    {
        //isi dari method
        return "laptop menyala";
    }

    function matikan_laptop()
    {
        return "laptop di matikan";
    }
}

//membuat object / instansiasi
$laptop_alfin = new laptop();
$laptop_ardi = new laptop();

//set property
$laptop_alfin->pemilik = "alfin";
$laptop_ardi->pemilik = "ardi";
$laptop_alfin->merk = "lenovo";
$laptop_alfin->ukuran_layar = "14 inchi";

//tampilkan property
echo $laptop_alfin->pemilik;
echo "<br/>";
echo $laptop_ardi->pemilik;
echo "<br />";
echo $laptop_alfin->merk;
echo "<br/>";

//tampilkan method
echo $laptop_alfin->hidupkan_laptop();
