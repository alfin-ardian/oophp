<?php
// //overiden construktor dan destruktor
// Di dalam PHP, ketika child class memiliki constructor dan destructor sendiri, 
//maka PHP akan melewatkan constructor dan destructor parent class, 
//kasus ini disebut dengan Overridden Constructor dan Overridden Destructor
//untuk tetap menjalankan
// parent::__construct() dan parent::__desctruct().

class komputer
{
    public function __construct()
    {
        echo "ini konstruk dari class komputer <br/>";
    }

    public function __destruct()
    {
        echo "ini destruk dari class komputer <br/>";
    }
}

class laptop extends komputer
{
    public function __construct()
    {
        parent::__construct();
        echo "ini konstruk dari class laptop <br/>";
    }

    public function __destruct()
    {
        parent::__destruct();
        echo "ini destruk dari class laptop <br/>";
    }
}

$new_laptop = new laptop();

echo "belajar oop <br/>";
