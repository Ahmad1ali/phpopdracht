<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width= , initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //  echo "<h1> Ahmad </h1>"
    //  $userName = "Ahmad";
    //  echo $userName;
    //  $number = 100;
    //  echo $number;
    //  $numbers = array(22, 35.25, 25, 15 );
    //  echo "<h1> $numbers[1]</h1>";
    // kijken wat soort is vireable

    //  opdracht 1
    $tijd = 10;
    $ochtend = "het is ochtend ";
    $middag = "het is middag ";
    $Avond = "het is avond";
    $Nacht = "het is nacht";
    
     if ($tijd >=  6 && $tijd < 12 ) {
        echo $ochtend;
        
     }else if($tijd >= 12 && $tijd <  18){
        echo $middag;

     }else if ($tijd >= 18 && $tijd <  24){
        echo $Avond;
     }else {
        echo $Nacht;
     }

    //   opdrACHT3
    $x = 20  ;
    $y = 30;
    $N = $x <= $y ;
     echo  "<br>". $N;

   //   opdracht4

   $price = 150;
   while ($price < 100 ) {
      $price =  $price + 19;
      echo  "price is verhoogd 19%"  ;   
   }


     ?>

    
</body>
</html>