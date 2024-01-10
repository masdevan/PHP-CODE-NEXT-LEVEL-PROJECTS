<?php
function calc($a){
if($a <= 1){
    return 10;
} else if ($a >= 1 && $a <= 5){
    return 20;
} else {
    return 30;
}
}
$a = 5;

$biaya = calc($a);
echo "berat : " . $a . "kg <br/>";
echo "harga : " . $biaya . "ribu";
?>