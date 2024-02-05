<?php 

$listOfCapitals = array("USA"=>"washington D.C.",
                        "Japan"=>"Kyoto",
                        "South Korea"=> "Seoul",
                        "India"=>"New Delhi" );


// todo to add new key value pair
    $listOfCapitals["China"] = "Bei jing";


//todo to get the values at each index

echo $listOfCapitals["USA"];


    foreach($listOfCapitals as $key => $value) {
        echo  $key ." =>  ". $value ."<br>";
    }

    ?>