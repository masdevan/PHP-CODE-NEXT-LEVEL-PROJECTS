<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
$x = "Devan Yudistira Sugiharta";
echo "Perkenalkan Nama saya " . $x . "<br/><br/>";

echo "decimal : ";
var_dump(1234);
echo "<br/>";
echo "octal : ";
var_dump(0123);
echo "<br/>";
echo "hexadecimal : ";
var_dump(0x1A);
echo "<br/>";
echo "Binary : ";
var_dump(0b111111111);
echo "<br/>";
echo "Underscore di Number : ";
var_dump(0_1234_567); 
echo "<br/>";
?>
<br/>
<br/>

<?php
$nama = "Devan";
$tahun = 2023;
$umur = 16;
$berat = 50;
$tinggi = 160.5;

echo "Perkenalkan nama saya " . $nama . " umur saya adalah " . $umur . " Tahun, Saya lahir pada " . $tahun - $umur . ", <br/>";
echo "Saya Memiliki Tinggi badan " . $tinggi . "cm dengan berat badan " . $berat . "kg"; 
?>

<br>
<br>

<?php
$text = "Hai Semuanya di Sini";

echo strlen($text);
echo "<br/>";
echo str_word_count($text);
echo "<br/>";
echo str_replace("Hai", "Hallo", $text);
echo "<br/>";
echo str_repeat("Hai ", 8);
?>

<br>
<br>

<?php
$values = array(1, 2, 3, 4);
var_dump($values);
echo "<br/>";
$name = ["Eko", "Kurniawan", "Khannedy"];
var_dump($name);
?>

<br>
<br>

<?php
$arname = array(1, 2, 3, 4, 5);

foreach ($arname as $key) {
    echo $key . "<br/>";
}
?>

<br>
<br>

<?php
$uang = 80000;
if($uang == 100000){
    echo "Tidak ada kembalian";
} else if($uang <= 100000){
    echo "Ada Kembalian " . 100000 - $uang;
} else if($uang == 150000){
    echo "Uang anda Kurang";
}
?>

<br>
<br>

<?php
$barang = [
    [
        "nama" => "Buku Tulis",
        "harga" => "5000",
        "stok" => 100,
    ],
    [
        "nama" => "pensil",
        "harga" => "2000",
        "stok" => 50,
    ],
    [
        "nama" => "Buku Tulis",
        "harga" => "5000",
        "stok" => 9,
    ]
];

foreach ($barang as $key => $value) {
    print_r("Nama : " . $value["nama"] . "<br/>" . "Harga : " . $value["harga"] . "<br/>");
    echo $stok = ($value['stok'] <= 10) ? "Stok Tidak mencukupi" : "Stok Mencukupi <br/><br/>";
}
?>
    
</body>
</html>