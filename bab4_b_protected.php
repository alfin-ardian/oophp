<?php
//enkapsulasi protected
//tidak bisa di akses dari luar class
//tapi bisa di akses di dalam class dan class turunannya

class laptop
{
    protected $pemilik = "anto";

    public function akses_pemilik()
    {
        return $this->pemilik;
    }

    protected function hidupkan_laptop()
    {
        return "hidupkan laptop";
    }

    public function paksa_hidup()
    {
        return $this->hidupkan_laptop();
    }
}

//enkapsulasi protected juga bisa di akses dari class turunan
class komputer extends laptop
{
    public function tampilkan_nama()
    {
        return $this->pemilik;
    }
}


$laptop_anto = new laptop();
$laptop_baru = new komputer();

echo $laptop_baru->tampilkan_nama();
echo "<br/>";
echo $laptop_anto->paksa_hidup();

//satu satunya cara pengaksesan 'isi' class didalam class dengan $this
