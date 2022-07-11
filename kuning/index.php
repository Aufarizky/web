<?php

echo "Tugas 2";
echo "<br>";
echo "<br>";

class car{
    function car_favorite(){
        echo "Top Recommended Car" ;
    }

    function car_recomend(){
        echo "Most Sell Car" ;
    }
}

abstract class car_abstrak {
    abstract function jenis_mobil($name);
    abstract function nama_mobil($name);
}


class judul extends car_abstrak{
    public function jenis_mobil($name){
        echo "Nama Produk : " . $name ;
    }

    public function nama_mobil($name){
        echo "Nama Produk : " . $name ;
    }
}

trait trait_car{
    public function jenis_mobil($name){
        echo "Merk Mobil Yang Tersedia : " . $name  . "<br>";
    }

    public function nama_mobil($name){
        echo "Type Mobil Yang Tersedia : " . $name  . "<br>";
    }
}

class judul1{
    use trait_car;
}

class judul2{
    use trait_car;
}

$class1 = new judul1();
$class1->jenis_mobil("Honda");
$class1->nama_mobil("Honda : Xenia");

echo "<br>";

$class2 = new judul2();
$class2->jenis_mobil("Toyota");
$class2->nama_mobil("Toyota : Innova");

?>