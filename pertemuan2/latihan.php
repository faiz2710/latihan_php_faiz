<?php

$jabatan = 1;
$waktu = 100;

if ($jabatan == 1) {
    $jabatan = "manager";
    $gaji = 7000000;
}elseif ($jabatan == 2){
    $jabatan = "supervisor";
    $gaji = 5000000;
}elseif ($jabatan == 3){
    $jabatan = "staff";
    $gaji = 3000000;
}

if ($gaji <= 3000000){
    $pajak = 5;
} elseif ($gaji <=5000000){
    $pajak = 10;
}elseif ($gaji > 5000000){
    $pajak = 15;
}

// variabel bonus
$jambonus = $waktu - 200;


if ($waktu > 200){
    $bonus = $jambonus * 20000;
    $ucapan = "selamat jam kerja anda melebihi  dari 200 jam";
}else{
    $bonus = 0;
    $ucapan = "jam kerja anda kurang dari 200 jam makannya kerja tolollllllll ";
}

$persenan = $pajak/100;
$total_pajak = $gaji * $persenan;
$gaji_bersih = $gaji - $total_pajak + $bonus;

function rupiah ($angka){
    $hasil_rupiah = "Rp" . number_format($angka,2,',','.');
    return $hasil_rupiah;
}

echo "jabatan: $jabatan <br>";
echo "gaji pokok :". rupiah ($gaji). "<br>";
echo "pajak : " . $pajak. "%<br>"; 
echo "total pajak :". rupiah ($total_pajak). "<br>";
echo "bonus:". rupiah ($bonus). "<br>";
echo $ucapan;
echo "<br> gaji bersih :". rupiah ($gaji_bersih). "<br>";