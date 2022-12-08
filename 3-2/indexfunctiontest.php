<?php

$fruits = ["りんご" => 100, "みかん" => 50, "桃" => 1000];

$fruits_volume = [3, 3, 3];

// var_dump($fruits);
// echo "<br>";

function fruitssum($price, $volume) {

  $sum = $price * $volume;
  return $sum;
}
$i= 0;
foreach($fruits as $key => $val){
  $sum = fruitssum($val,$fruits_volume[$i]);
  print $key."は".$sum."円です。";
  $i++;
  echo '<br>';
}

?>


