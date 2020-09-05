<?php
//class, object, property, method

//membuat class
class laptop
{
    //membuat property
    var $merk;
    var $procesor;
    var $harga;
    //class tidak harus memiliki property


    //membuat method
    function hidupkan_laptop()
    {
        return "laptop menyala";
    }

    function matikan_laptop()
    {
        //isi dari method matikan_laptop
        return "laptop mati";
    }
    //class tidak harus memiliki method
}

//membuat object (instansiasi)
$laptop_alfin = new laptop();

//memanggil object
echo $laptop_alfin->hidupkan_laptop();
