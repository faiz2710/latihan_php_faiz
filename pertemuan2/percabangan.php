<?php

$umur = 13;

if ($umur == 0) {
    echo "Bayi";
} elseif ($umur >= 1 && $umur <= 12) {
    echo "Anak - anak";
}  elseif ($umur >= 13 && $umur <= 17) {
    echo "Remaja";
}  elseif ($umur >= 18 && $umur <= 50) {
    echo "Dewasa";
}  elseif ($umur >= 51) {
    echo "Lansia";
} else{
    echo"_";
}