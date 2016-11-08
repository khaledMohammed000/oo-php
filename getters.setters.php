<!doctype html>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Getters And Setters Example</title>
  </head>
  <body>
    <h1>Getters and Seteers : </h1>
    <?php
      class Circle{
        private $radius;

        public function __construct($radius){
          $this->$radius=$radius;
        }

        public function __get($name){
          if($name == 'radius'){
            return $this->$radius;
          }else{
            throw new Exception("No such property defined !!");
          }
        }

        public function area(){
          return pow($this->radius,2)*pi();
        }

        $newCircle = new Circle(5);
        echo "Radius : ".$this->$radius."<br/>";
        echo "Area : ".$newCircle.area()."<br/>";
      }
     ?>
  </body>
</html>
