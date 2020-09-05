<?php

class laptop
{
    public function __construct()
    {
        echo "konstruktor dari class laptop <br />";
    }

    public function __destruct()
    {
        echo "destruktor dari class laptop <br />";
    }
}

class komputer extends laptop
{
    public function __construct()
    {
        echo "konstruktor dari class komputer <br/>";
    }

    public function __destruct()
    {
        echo "destruktor dari class komputer <br/>";
    }
}

class chromebook extends komputer
{
    public function __construct()
    {
        parent::__construct();
        echo "konstruktor dari class chhromebook <br/>";
    }

    public function __destruct()
    {
        parent::__destruct();
        echo "destruktor dari class chromebook <br/>";
    }
}

$gadget_baru = new chromebook();

echo "belajar oop <br/>";
