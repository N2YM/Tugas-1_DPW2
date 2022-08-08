<?php

class Hewan {
    public $bisa_terbang = "Tidak Bisa Terbang ";
}

class Kucing extends Hewan {
    function bersuara()
    {
        return "Meoong";
    }
}
$franco = new Kucing;
$franco->jumlah_kaki = 4;
echo "Franco Adalah Kucing <br>";
echo "Punya kaki Sebanyak : ";
echo $franco->jumlah_kaki."<br>";
echo $franco->bisa_terbang."<br>";
echo "Suaranya : ";
echo $franco->bersuara()."<br>";

echo "<hr>";  // <<============================================>>


class Anjing extends Hewan {
    function bersuara()
    {
        return "Guuk guuk";
    }
}
$diggi = new Anjing;
$diggi->jumlah_kaki = 4;
echo "Diggi Adalah Anjing <br>";
echo "Punya kaki Sebanyak : ";
echo $diggi->jumlah_kaki."<br>";
echo $diggi->bisa_terbang."<br>";
echo "Suaranya : ";
echo $diggi->bersuara()."<br>";

echo "<hr>";  // <<============================================>>

class Elang extends Hewan {
    public $bisa_terbang = "Bisa Terbang";
    function bersuara()
    {
        return "Miip miip";
    }
}
$zargus = new Elang;
$zargus->jumlah_kaki = 2;
echo "Zargus Adalah Elang <br>";
echo "Punya kaki Sebanyak : ";
echo $zargus->jumlah_kaki."<br>";
echo $zargus->bisa_terbang."<br>";
echo "Suaranya : ";
echo $zargus->bersuara()."<br>";

echo "<hr>";  // <<============================================>>

class Angsa extends Hewan {
    public $bisa_terbang = "Bisa Terbang";
    function bersuara()
    {
        return "kwaak kwaaak";
    }
}
$masha = new Angsa;
$masha->jumlah_kaki = 2;
echo "Masha Adalah Angsa <br>";
echo "Punya kaki Sebanyak : ";
echo $masha->jumlah_kaki."<br>";
echo $masha->bisa_terbang."<br>";
echo "Suaranya : ";
echo $masha->bersuara()."<br>";

echo "<hr>";  // <<============================================>>