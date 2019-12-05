<?php
$input = intval($argv[1]);
$cent = round($input, 2);
$cent = $cent - 1 % $cent;

$data = array(50,20,10,5,2,1);
$data2 = array(50,20,10,5);

foreach ($data as $value) {

  $wissel = floor($input / $value);

foreach ($data2 as $value) {
  // code...
}

  if ($wissel >= 1) {

    $input = $input - ($value * $wissel);


    echo $wissel . " x " . $value . " euro" . PHP_EOL;
  }

}

?>
