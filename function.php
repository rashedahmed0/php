<?php
 function greed(){
    echo 'hello php world <br>';
 }

 greed();

function sum($a , $b){
    $c = $a + $b ;
    echo $c ;
}
sum (3,5);

function greeting($name = 'guest'){
    echo 'hello ' , $name . '<br>';
}
greeting('rial');
greeting();
  
?>