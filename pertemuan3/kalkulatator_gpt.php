<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operator = $_POST['operator'];
    $result = '';

    if (is_numeric($num1) && is_numeric($num2)) {
        switch ($operator) {
            case 'tambah':
                $result = $num1 + $num2;
                break;
            case 'kurang':
                $result = $num1 - $num2;
                break;
            case 'kali':
                $result = $num1 * $num2;
                break;
            case 'bagi':
                $result = $num2 != 0 ? $num1 / $num2 : 'Tidak dapat dibagi dengan nol';
                break;
            default:
                $result = 'Operator tidak valid';
        }
    } else {
        $result = 'Masukkan angka yang valid';
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Kalkulator PHP</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #121212;
            color: #ffffff;
        }
        .calculator {
            background: #1e1e1e;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(255, 255, 255, 0.1);
            text-align: center;
        }
        input, select, button {
            margin: 10px;
            padding: 10px;
            width: 100%;
            border: 1px solid #ccc;
            border-radius: 5px;
            background: #333;
            color: #ffffff;
        }
        button {
            background-color: #28a745;
            color: white;
            cursor: pointer;
        }
        button:hover {
            background-color: #218838;
        }
        h3 {
            margin-top: 15px;
        }
    </style>
</head>
<body>
    <div class="calculator">
        <h2>Kalkulator Sederhana</h2>
        <form method="post" action="">
            <input type="text" name="num1" required placeholder="Masukkan angka pertama"> <br>
            <input type="text" name="num2" required placeholder="Masukkan angka kedua"> <br>
            <select name="operator">
                <option value="tambah">+</option>
                <option value="kurang">-</option>
                <option value="kali">*</option>
                <option value="bagi">/</option>
            </select> <br>
            <button type="submit">Hitung</button>
        </form>
        
        <?php if (isset($result)) { ?>
            <h3>Hasil: <?php echo $result; ?></h3>
        <?php } ?>
    </div>
</body>
</html>
