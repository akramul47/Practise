<pre>
<?php

$fruits = array('orange', 'apple', 'banana');

echo is_array($fruits) ? 'Is array' : 'Is not an array';
echo "Size of array is " . sizeof($fruits);
$r = array_reverse($fruits);
print_r($r);

echo in_array('orange', $fruits) ? 'In array' : 'Not in array';

$cars = array(
    "Suzuki" => "Baleno",
    "Skoda" => "Fabia",
    "Tata" => "Tiger"
);

// $f = array_flip($cars);
// print_r($f);

$merged = array_merge($cars, $fruits);
print_r($merged);

?>
</pre>