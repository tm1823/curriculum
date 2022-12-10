<?php 
$number = $_POST["number"];
$len = strlen($number) - 1;
//echo $len;
$num = substr($number, mt_rand(0, $len),1);
$day = date("Y/m/d", time());
echo $day."の運勢は";
echo "<br>";
// var_dump($number);
// var_dump($num);
// $test = 0;
echo "選ばれた数字は".$num;
echo "<br>";
if ($num >= 9){
  echo "大吉";
} elseif ($num >= 7){
  echo "吉";
} elseif ($num >= 4){
  echo "中吉";
} elseif ($num >= 1){
  echo "小吉";
} else {
  echo "凶";
}
//echo $number;
?>