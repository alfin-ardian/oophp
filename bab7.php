<?php
//membuat argumen dalam method

class laptop
{
    public $pemilik = "anto";
    public $merk = "asus";

    public function hidupkan_laptop($pemilik, $merk)
    {
        return "hidupkan laptop $merk punya $pemilik";
    }

    public function default_argument($pemilik = "anto", $merk = "asus")
    {
        return "funnction ini default merknya $merk dan pemiliknya $pemilik";
    }

    public function matikan_laptop()
    {
        return "matikan laptop $this->merk punya $this->pemilik";
    }
}

$laptop_baru = new laptop();

echo $laptop_baru->hidupkan_laptop("alfin", "lenovo");
echo "<br/>";
echo $laptop_baru->matikan_laptop();
echo "<br/>";
echo $laptop_baru->default_argument();
//jika argumenta di tulis maka akan menimpa argument defaultnya
echo "<br/>";
echo $laptop_baru->default_argument("aku", "macbook pro");
