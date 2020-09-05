<?php
//belajar constanta php

class nama_class
{
    const HARGA = 10000;
}

$laptop_baru = new nama_class();

echo "harga laptop adalah : " . nama_class::HARGA;
echo "<br/>";
echo $laptop_baru::HARGA;
