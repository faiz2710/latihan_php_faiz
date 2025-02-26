<!doctype html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
</head>

<body class="bg-gray-100 flex items-center justify-center min-h-screen">

    <?php

    $nama = "";
    $UTS = "";
    $UAS = "";
    $Tugas = "";

    if (isset($_POST['hitung'])) {
        $nama = $_POST['nama'];
        $UTS = $_POST['UTS'];
        $UAS = $_POST['UAS'];
        $Tugas = $_POST['Tugas'];


        $nilai = ((30 / 100) * $UTS) + ((40 / 100) * $UAS) + ((30 / 100) * $Tugas);

        if ($nilai >= 85) {
            $status = "A";
        } elseif ($nilai >= 70) {
            $status = "B";
        } elseif ($nilai >= 60) {
            $status = "C";
        } elseif ($nilai >= 50) {
            $status = "D";
        } else {
            $status = "E";
        }
    }
    ?>

    <div class="container flex justify-center items-center mx-auto">
        <div class="bg-white p-8 rounded-lg shadow-lg w-100">
            <h2 class="text-2xl font-semibold mb-4 text-center">
                Form Input Nilai Siswa
            </h2>

            <form action="" method="POST">
                <label for="">Nama Siswa</label>
                <input type="text" name="nama" class="w-full p-3 mb-4 border border-gray-300 rounded-md " autocomplete="off">

                <label for="">Nilai Tugas</label>
                <input type="text" name="Tugas" class="w-full p-3 mb-4 border border-gray-300 rounded-md" autocomplete="off">

                <label for="">Nilai UTS</label>
                <input type="text" name="UTS" class="w-full p-3 mb-4 border border-gray-300 rounded-md" autocomplete="off">

                <label for="">Nilai UAS</label>
                <input type="text" name="UAS" class="w-full p-3 mb-4 border border-gray-300 rounded-md" autocomplete="off">


                <input type="submit" value="hitung Hasil" name="hitung" class="w-full p-3 bg-purple-500 text-white rounded-md hover:bg-purple-700 cursor-pointer mb-4">

        </div>
        <div class="container">
            <div class="bg-white p-8 items-center justify-center rounded-lg shadow-lg w-100 mx-8 mb-5 w-200">
                <h2 class="text-2xl font-semibold mb-4 text-center">
                    Hasil Penilain
                </h2>
                <table class="border-collapse border border-gray-400 items-center w-110">
                    <thead>
                        <tr>
                            <th class="border border-gray-300 bg-black text-white">Nama</th>
                            <th class="border border-gray-300 bg-black text-white">Nilai Tugas</th>
                            <th class="border border-gray-300 bg-black text-white">Nilai UTS</th>
                            <th class="border border-gray-300 bg-black text-white">Nilai UAS</th>
                            <th class="border border-gray-300  bg-black text-white">Nilai Akhir</th>
                            <th class="border border-gray-300  bg-black text-white">Kategori</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="border border-gray-300 text-center"><?php echo $nama ?></td>
                            <td class="border border-gray-300 text-center"><?php echo $Tugas ?></td>
                            <td class="border border-gray-300 text-center"><?php echo $UTS ?></td>
                            <td class="border border-gray-300 text-center"><?php echo $UAS ?></td>
                            <td class="border border-gray-300 text-center"><?php echo $nilai ?></td>
                            <td class="border border-gray-300 text-center"><?php echo $status ?></td>
                        </tr>
                    </tbody>
                </table>

            </div>
            <input type="submit" value="Hapus Semua Data" name="hitung" class="mt-5 mx-8 w-100 p-3 bg-red-500 text-white rounded-md hover:bg-purple-700 cursor-pointer mb-4">
        </div>
    </div>

</body>

</html>