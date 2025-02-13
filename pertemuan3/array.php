<!-- array -->

<?php
$namabokap = ["cecep", "pecec", "ececp", "ceecp"];
echo $namabokap[0]. "<br>";
echo $namabokap[1]. "<br>";
echo $namabokap[2]. "<br>";
echo $namabokap[3]. "<br>";
echo "<hr>";

echo "array asosiatif <br><br>";
$kulit = [
    "nama" => "rapka",
    "warna kulit" => "hitam legap",
    "rasa" => "kecut",
];

echo "nama = ". $kulit['nama']. "<br>";
echo "warna kulit = ". $kulit['warna kulit']. "<br>";
echo "rasa = ". $kulit['rasa']. "<br>";
// pembatasan korut sama korsel

echo "<hr>";

$produk = [
    ["nama" => "laptop", "harga" => 7000000, "stok" => 10],
    ["nama" => "mouse", "harga" => 10000000, "stok" => 5],
    ["nama" => "Monitor", "harga" => 15000000, "stok" => 4]
];

echo "<h1>daftar stok</h1>";
foreach($produk as $p){
    echo "nama produk = " . $p['nama'] . ", harga Rp = " . number_format  ($p['harga'],0,",", ".") .  ", stok = ". $p['stok']. "<br><hr   >";
}