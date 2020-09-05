<?php
class Product
{
    public  $judulBuku = "judul",
        $namaPengarang = "pengarang",
        $harga = 0;
}


$produk1 = new Product();
$produk1->judulBuku = "naruto";
var_dump($produk1);
