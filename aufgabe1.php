<?php
class Bicycle{
   Public $manufacturer;
   Public $model;
   Public $year;

    function __construct($manufacturer,$model,$year){
        $this->manufacturer = $manufacturer;
        $this->model = $model;
        $this->year = $year;
    }
}

$bi1= new Bicycle("Kalkhoff","Image 3.B Move Wabe",2022);


echo "manufacturer: ".$bi1->manufacturer."<br>";
echo "model: ".$bi1->model."<br>";
echo "year: ".$bi1->year."<br>";



?>