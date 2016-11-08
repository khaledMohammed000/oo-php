<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Abstract class example in PHP</title>
  </head>
  <body>
    <?php
      abstract class Shape{

        function type(){
          return $this->getType();
        }
        abstract function getType();
        abstract function area();
      }

      class Circle extends Shape{
        public $radius;

        public function __construct($radius){
          $this->radius=$radius;
        }

        public function getType(){
          return __CLASS__;
        }

        public function area(){
          return pow($this->radius,2)*pi();
        }
      }

      class Rectangle extends Shape{
        public $length;
        public $width;

        public function __construct($length,$width){
          $this->length=$length;
          $this->width=$width;
        }

        public function getType(){
          return __CLASS__;
        }

        public function area(){
          return $this->length * $this->width;
        }
      }

      $shape1 = new Circle(5);
      $shape2 = new Rectangle(4,5);

      echo "shape Type :".$shape1->getType()." Area: ".$shape1->area()."<br/>";
      echo "shape Type :".$shape2->getType()." Area: ".$shape2->area()."<br/>";

     ?>
  </body>
</html>
