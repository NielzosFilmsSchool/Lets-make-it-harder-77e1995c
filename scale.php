<?php
$num1 = $argv[1];
$num2 = $argv[2];
$wheights_arr = (explode(",", $argv[3]));
rsort($wheights_arr);

$side = round(($num1 + $num2) / 2);
$to_use = array();
foreach($wheights_arr as $wheight) {
    if($wheight <= $side) {
        array_push($to_use, $wheight);
        $side = $side - $wheight;
    }
}
sort($to_use);
if($side == 0) {
    foreach($to_use as $tmp) {
        echo $tmp.", ";
    }
} else {
    echo "Niet in balans";
}

?>