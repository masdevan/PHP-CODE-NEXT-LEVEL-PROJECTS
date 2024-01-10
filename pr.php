<?php
function calc($a){
if($a >= 100){
    return $a;
} else {
    return $a;
}
}

$a = 120;
$c = calc($a) - (calc($a) * 0.10);
echo "Total Belanja : $" . $a;
echo ($a >= 100) ? " - 10% <br/> Total setelah Diskon : $" . $c : '';
?>