<!doctype html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
</head>

<body class="bg-gray-100 flex items-center justify-center min-h-screen">


    <?php
    $bil1 = "";
    $bil2 = "";
    $operasi = "";
    $hasil = "";

    if (isset($_POST['hitung'])) {
        $bil1 = $_POST['bil1'];
        $bil2 = $_POST['bil2'];
        $operasi = $_POST['operasi'];

        switch ($operasi) {
            case 'tambah':
                $hasil = $bil1 + $bil2;
                break;
            case 'kurang':
                $hasil = $bil1 - $bil2;
                break;
            case 'kali':
                $hasil = $bil1 * $bil2;
                break;
            case 'bagi':
                $hasil = $bil1 / $bil2;
                break;
            default:
                $hasil = "Operasi tidak ditemukan";
                break;
        }
    }

    ?>


    <div class="bg-white p-8 rounded-lg shadow-lg w-100 ">
        <h2 class="text-2xl font-semibold mb-4 text-center">
            kalkulator
        </h2>

        <form action="" method="POST">
            <input type="text" name="bil1" class="w-full p-3 mb-4 border border-gray-300 rounded-md " placeholder="Masukan Bilangan Pertama" autocomplete="off"  value="<?php echo $bil1 ?>">
            <input type="text" name="bil2" class="w-full p-3 mb-4 border border-gray-300 rounded-md" placeholder="Masukan Bilangan Kedua" autocomplete="off" value="<?php echo $bil2 ?>">

            <select name="operasi" id="" class="w-full p-3 mb-4 border border-gray-300 rounded-md">
                <option value="tambah"> + </option>
                <option value="kurang"> - </option>
                <option value="kali"> * </option>
                <option value="bagi"> / </option>
            </select>

            <input type="submit" value="hitung" name="hitung" class="w-full p-3 bg-purple-500 text-white rounded-md hover:bg-purple-700 cursor-pointer mb-4">

            <input type="text" name="Hasil" class="w-full p-3 mb-4 border border-gray-300 rounded-md" readonly placeholder="Hasil Bilangan" autocomplete="off" value="<?php echo $hasil ?>">
    </div>
</body>

</html>