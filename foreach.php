<pre>
<?php

// $cars = array(
//     "Suzuki" => "Baleno",
//     "Skoda" => "Fabia",
//     "Tata" => "Tiger"
// );

// foreach($cars as $car){
//     echo "$car <br>";
// }

$numbers = array(
    array(10, 100, 101),
    array(120, 130, 140),
    array(150, 90, 80)
);

$final_sum = 0;
$sum = 0;
foreach($numbers as $number){

    print_r($number);
    foreach($number as $value){
        $sum += $value;
        
    }
    echo $sum;
    $final_sum += $sum;
    $sum = 0;
}

echo $final_sum;




?>
</pre>