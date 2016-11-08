<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Inheritence</title>
  </head>
  <body>
    <h3>Inheritence in PHP</h3>
    <?php
        class Vehicle{
          public $make;
          public $year;
          public $model;

          public function __construct($year,$make,$model){
            $this->year=$year;
            $this->model=$model;
            $this->make=$make;
          }

          public function display(){
            return "Year : ".$this->year ." Make : ". $this->model ." Make : ". $this->make;
          }
        }

        class Truck extends Vehicle{
          public $type;

          public function __construct($year,$make,$model,$type){
            parent::__construct($year,$make,$model);
            $this->type=$type;
          }

          public function display(){
            return parent::display()." Type : ".$this->type;
          }
        }

        $mustang = new Vehicle(2013,"Ford","Mustang");
        $f150 = new Truck(2013,"Ford","F-150","Half-Ton PickUp");

        echo "Vehicale 1 : ".$mustang->display()."<br/>";
        echo "Vehicale 2 : ".$f150->display()."<br/>";

     ?>
  </body>
</html>
