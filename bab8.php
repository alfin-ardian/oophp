<?php
//construktor dan destruktor

//construktor = method khusus yang akan di jalankan saat object di buat / instansiasi
//penulisan = __construct

//destruktor = method khusus yang akan di jalankan saat object di hapus
//penulisan = __destruct
//php punya fitur penghapusan object masal dengan garbage collection

class laptop
{
    private $pemilik = "andi";
    private $merk = "asus";

    public function __construct()
    {
        echo "ini akan otomatis di jalankan";
    }

    public function hidupkan_laptop()
    {
        return "hidupkan laptop $this->merk punya $this->pemilik";
    }

    public function __destruct()
    {
        echo "ini berasal dari destruktor laptop";
    }
}

$laptop_baru = new laptop();

echo "<br />";
echo $laptop_baru->hidupkan_laptop();
echo "<br />";
