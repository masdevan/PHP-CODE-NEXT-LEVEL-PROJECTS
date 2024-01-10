<table border="1" cellspacing='0'>
    <tr>
    <th>Nama</th>
    <th>Kelas</th>
    <th colspan="4">Hobi</th>
    </tr>
<?php
$array = [
    ["nama" => "Devan", "Kelas" => "RPL", "Hobi" => ["Masak", "Ngoding", "Melukis", "Menonton"]],
    ["nama" => "Ryan", "Kelas" => "RPL", "Hobi" => ["Membaca", "Nonton", "Mancing", "Ngobrol"]],
    ["nama" => "Ega", "Kelas" => "RPL", "Hobi" => ["Masak", "Tidur", "Berak", "Melukis"]],
    ["nama" => "Hanif", "Kelas" => "RPL", "Hobi" => ["Senam", "Yoga", "Nonton", "Tidur"]],
    ["nama" => "Reno", "Kelas" => "RPL", "Hobi" => ["Mancing", "Tidur", "Melukis", "Menonton"]],
    ["nama" => "Andre", "Kelas" => "RPL", "Hobi" => ["Senam", "Masak", "Mancing", "Menonton"]],
    ["nama" => "Sabrina", "Kelas" => "RPL", "Hobi" => ["Nonton", "Ngoding", "Melukis", "Masak"]],
    ["nama" => "Mila", "Kelas" => "RPL", "Hobi" => ["Masak", "Renang", "Nonton"]],
];

foreach ($array as $a) {
    echo "<tr>";
    echo "<td>" . $a["nama"] . "</td>";
    echo "<td>" . $a["Kelas"] . "</td>";
    echo "<td>";
    foreach ($a['Hobi'] as $x) {
        echo $x . "<br/>";
    }
    echo "</td>";
    echo "</tr>";
}
?>  
</table>