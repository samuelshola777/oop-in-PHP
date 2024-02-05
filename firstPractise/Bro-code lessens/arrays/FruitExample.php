<?php

        $food_1 ="apple";
        $food_2 ="orange";
        $food_3 ="banana";
        $food_4 ="coconut";


   $listOfFruits = array("apple", "orange", "banana","coconut");      


   for($i = 0; $i < count($listOfFruits) ; $i++){
    echo $listOfFruits[$i]."<br>";
   }



   
$foods = array("apple","orange","banana","coconut");
$foods[0] = "pineapple";

//todo to add a value to the end of the array
array_push($foods,"mango");

// todo  pop function will remove the last value in the array

array_pop($foods);

//todo the shirt function will remove the first value from the array and shift the remaining values forward

array_shift($foods);
//todo to count the number of items in the array
echo count($foods);

//todo to reverse an array 
$foods = array_reverse($foods);

    foreach ($foods as $food) {
        echo $food."<br/>";
    }




?>