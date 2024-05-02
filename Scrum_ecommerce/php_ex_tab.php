<?php

  $mA= array(
  	array(3,5,2),
    array(2,3,2),
    array(1,2,4)
  	);
   $mB= array(
  	array(3,3,1),
    array(1,3,2),
    array(1,1,2)
  	);

    for ($i=0; $i <count($mA[0]) ; $i++) {
       for ($j=0; $j <count($mA[0]) ; $j++) { 
           $mS[$i][$j]=$mA[$i][$j]+$mB[$i][$j];
        } 
   	
   }
    var_dump($mS);

    for ($i=0; $i <count($mA[0]); $i++) {
         
       for ($j=0; $j <count($mA[0]); $j++) { 
           $mP[$i][$j]=0;
           for ($k=0; $k <count($mA[0]); $k++) { 
           	    $mP[$i][$j]+=$mA[$i][$k]*$mB[$k][$j];
           }
        } 
   	   
   }
    var_dump($mP);