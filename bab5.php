<?php
// variabel $this / pseudo variabel
//adalah variabel khusus dalam oop sebagai penunjuk object

class laptop
{
    public $pemilik = "andi";

    public function hidupkan_laptop()
    {
        // return "hidupkan laptop $pemilik"; ini akan eror
        return "hidupkan laptop $this->pemilik";
    }
}

$laptop_baru = new laptop();
$laptop_baru->pemilik = "anto";
$laptop_lama  = new laptop();
echo $laptop_baru->hidupkan_laptop();
echo "<br/>";
echo $laptop_lama->hidupkan_laptop();
