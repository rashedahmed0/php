<?php
for($i = 1 ; $i <= 10 ; $i++){
    // echo $i . '<br>';
    if($i % 2 === 0){
        echo $i . '<br>';
    }
}
for($i = 1 ; $i <= 5 ; $i++){
    echo $i . '<br>';

}

$fruits = ['apple' , 'lichi' , 'banana'];
for($i = 0 ; $i < count($fruits) ; $i++){
    echo $fruits[$i] .'<br>';
}
?>