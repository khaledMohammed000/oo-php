<html>
<head>
  <title>Prime Number Example</title>
</head>

<body>
  <h1>These numbers are prime : </h1>
  <?php
    include 'isPrime.function.php';
    $primeNumer = array();
    for($x=1;$x<1000;$x++){
      if(isPrime($x)){
        $arrIndex=count($primeNumer);
        $primeNumer[$arrIndex]=$x;
      }
    }

    $printStr = "";
    foreach($primeNumer as $num){
      if($printStr!=""){
        $printStr .= " , ";
      }
      $printStr .= $num;
    }

    echo $printStr;
   ?>
</body>
</html>
