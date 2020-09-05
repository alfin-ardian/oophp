<?php
//static property static method
//adalah property dan method yang melekat pada class bukan kepada object
//untuk membuatnya tambahkan static

class laptop
{
    public $merk;
    public $pemilik;

    //static property
    public static $harga_beli;

    //static method
    public static function beli_laptop()
    {
        return "beli laptop";
    }

    public static function harga_total()
    {
        //cara akses property di dalam class
        return "total harga " . self::$harga_beli;
    }
}

class komputer extends laptop
{
    //overiding static property dan method
}

//set static property
laptop::$harga_beli = 4000;

//panggil static property
echo "laptop asus harganya " . laptop::$harga_beli;

echo "<br/>";

//panggil static method

echo laptop::beli_laptop();

echo "<br/>";

echo laptop::harga_total();
