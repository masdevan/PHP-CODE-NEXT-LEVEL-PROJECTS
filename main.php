<?php
$nilai = "c";
switch ($nilai) {
    case 'a':
        echo "Anda lulus dengan sangat baik";
        break;

        case 'b':
        case 'c':
            echo "Anda lulus";
            break;

        case 'd':
            echo "Anda tidak lulus";
            break;
    
    default:
        echo "Mungkin anda salah jurusan";
        break;
}

echo "<br/>";
echo "<br/>";

function sayHellow() {
    echo "Hello Function";
}
sayHellow();
echo "<br/>";
sayHellow();
echo "<br/>";

$bool = true;
if ($bool) {
    function hi(){
        echo "Hi";
    }
}
hi();

echo "<br/><br/>";

function sayHello($name){
    echo "Hello $name";
}

sayHello("Eko");
echo "<br/>";
sayHello("Budi");

echo "<br/>";
echo "<br/>";

function hello(string $v1, int $v2){
    $z = $v1 + $v2;
    return $z;
}

echo hello(20, 20);
?>