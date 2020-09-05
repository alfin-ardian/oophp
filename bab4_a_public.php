<?php
//enkapsulasi (public, protected, private) /information hiding
//encapsulation adalah metoda untuk menyembunyikan alur kerja property dan method
//fungsi enkapsulasi untuk pembatasan akses property dan method

//hak akses public
//seluruh kode program di luar class termasuk class turunan bisa mengaksesnya
//contoh enkapsulasi public

class laptop
{
    public $merk;

    public function hidupkan_laptop()
    {
        //isi method
    }
}

$laptop_anto = new laptop();

//set properti
$laptop_anto->merk = "asus";

//tampilkan properti
echo $laptop_anto->merk;

// Kata kunci var sebenarnya tidak perlu ditulis, 
//bahkan pada PHP versi 5.0 sampai dengan 5.1.3, 
///menggunakan kata var di dalam class akan menghasilkan warning. 
///Untuk PHP versi 5.1.3 ke atas, 
//menggunakan kata var tidak lagi menghasilkan warning (dianggap sebagai public).
// Agar sejalan dengan konsep enkapsulasi, 
//setiap property dan method dalam class harus 
//menggunakan kata kunci seperti public, protected, atau private. 
//Oleh karena itu, membuat property dengan keyword var tidak disarankan lagi .