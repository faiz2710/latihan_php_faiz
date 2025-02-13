<?php

echo "<center><h1>Table nilai siswa XRPL</h1>";
echo  "<center>";
$nilai = [
    ["nama" => "Dontol", "nilai" => 90],
    ["nama" => "rapka", "nilai" => 95],
    ["nama" => "Rangga", "nilai" => 80],
    ["nama" => "Bima", "nilai" => 60],
    ["nama" => "Aodi", "nilai" => 100]
];

echo '<table border="1" cellspacing="0" cellpadding="5">';
echo "<tr>
<th>nama</th>
<th>nilai</th>
<th>status</th>
</tr>";

foreach ($nilai as $siswa) {
    echo "<tr>";
    echo "<td>" . $siswa['nama'] . "</td>";
    echo "<td>" . $siswa['nilai'] . "</td>";

    if ($siswa['nilai'] >= 70) {
        $status = "<span style='color:green;'>lulus</span>";
    } elseif ($siswa['nilai'] >= 50) {
        $status = "<span style='color:orange;'>remedial</span>";
    } else {
        $status = "<span style='color:red;'>tidak lulus</span>";
    }

    echo "<td> $status </td>";
}
echo "</table>";
