<?php
function isPrime($number){
    $prime=true;
    $x=2;
    while($x<$number){
      if($number%$x == 0){
        $prime=false;
        break;
      }
      $x++;
    }
    return $prime;
}
 ?>
