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
$momo = new Kucing;
$momo->jumlah_kaki = 4;
echo "Momo Adalah Kucing <br>";
echo "Punya kaki Sebanyak : ";
echo $momo->jumlah_kaki."<br>";
echo $momo->bisa_terbang."<br>";
echo "Suaranya : ";
echo $momo->bersuara()."<br>";

echo "<hr>";  // <<============================================>>


class Anjing extends Hewan {
    function bersuara()
    {
        return "Guuk guuk";
    }
}
$doggo = new Anjing;
$doggo->jumlah_kaki = 4;
echo "Doggo Adalah Anjing <br>";
echo "Punya kaki Sebanyak : ";
echo $doggo->jumlah_kaki."<br>";
echo $doggo->bisa_terbang."<br>";
echo "Suaranya : ";
echo $doggo->bersuara()."<br>";

echo "<hr>";  // <<============================================>>

class Elang extends Hewan {
    public $bisa_terbang = "Bisa Terbang";
    function bersuara()
    {
        return "Miip miip";
    }
}
$zya = new Elang;
$zya->jumlah_kaki = 2;
echo "Zya Adalah Elang <br>";
echo "Punya kaki Sebanyak : ";
echo $zya->jumlah_kaki."<br>";
echo $zya->bisa_terbang."<br>";
echo "Suaranya : ";
echo $zya->bersuara()."<br>";

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