<?php
//object type

class Product
{

    public $judul = "judul",
        $penulis = "penulis",
        $penerbit = "penerbit",
        $harga = 0;


    public function __construct($judul, $penulis, $penerbit, $harga)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    public function getLabel()
    {
        return "$this->penulis, $this->penerbit";
    }
}


class cetakInfoProduct
{
    public function cetak($product)
    {
        $str = "{$product->judul} | {$product->getLabel()} (Rp. {$product->harga})";
        return $str;
    }
}

$product1 = new Product("naruto", "mashasi", "gramedia", 1000);


echo "komik : " . $product1->getLabel();

$infoProduk1 = new cetakInfoProduct();
echo $infoProduk1->cetak($product1);
