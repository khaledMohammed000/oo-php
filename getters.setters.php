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
          $this->radius=$radius;
        }

        public function __get($item){
          switch($item){
            case "radius": return $this->radius;
                            break;
            default:
              throw new Exception("No such property defined !!");
          }
        }

        public function __set($item,$val){
          switch($item){
            case "radius": $this->$item=$val;
                            break;
            default:
              throw new Exception("No such property defined !!");
          }
        }
        public function area(){
          return pow($this->radius,2)*pi();
        }


      }
        $newCircle = new Circle(5);
        echo "Area: " . $newCircle->area() . "<br/>";
        $newCircle->radius = 10;
        echo "New Radius: " . $newCircle->radius . "<br/>";
        echo "New Area: " . $newCircle->area() . "<br/>";

     ?>
  </body>
</html>
