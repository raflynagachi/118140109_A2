<!DOCTYPE htm>
<html>
    <head>
        <style>
            form input{
                padding: 10px;
                margin: 5px;
            }
            form select{
                padding: 10px;
                margin: 5px;
            }
            form button{
                padding: 10px;
                font-style: bold;
                color: #fff;
                background: #1a92c9;
            }

            form button:hover{
                background: #14719c;
            }
        </style>
    </head>
    <body>
        <h1>Kalkulator sederhana</h1>
        <form action="" method="POST" enctype="multipart/form-data">
            <input type="text" name="bil1" placeholder="bilangan 1" required><br>
            <input type="text" name="bil2" placeholder="bilangan 2" required><br>
            <select name="operator" required>
                <option value="+">+</option>
                <option value="-">-</option>
                <option value="*">*</option>
                <option value="/">/</option>
                <option value="%">%</option>
            </select>
            <button type="submit" name="kalkulasi">kalkulasi</button>
        </form><br><br>
        <?php
            if(isset($_POST['kalkulasi'])){
                switch($_POST['operator']){
                    case "+":
                        $hasil = $_POST['bil1'] + $_POST['bil2'];
                        $operatorTxt = "PENJUMLAHAN"; 
                    break;
                    case "-":
                        $hasil = $_POST['bil1'] - $_POST['bil2'];
                        $operatorTxt = "PENGURANGAN";
                    break;
                    case "*":
                        $hasil = $_POST['bil1'] * $_POST['bil2'];
                        $operatorTxt = "PERKALIAN";
                    break;
                    case "/":
                        $hasil = $_POST['bil1'] / $_POST['bil2'];
                        $operatorTxt = "PEMBAGIAN";
                    break;
                    case "%":
                        $hasil = $_POST['bil1'] % $_POST['bil2'];
                        $operatorTxt = "MODULUS";
                    break;
                    default:
                        $hasil = "operator salah";
                        $operatorTxt = "operator salah";
                }
                echo "Bilangan 1 = " .$_POST['bil1'];
                echo "<br>Bilangan 2 = " .$_POST['bil2'] ."<br><br>";
                echo $operatorTxt ."<br>Operator : " .$_POST['operator'];
                echo "<br>Hasil : " .$hasil;
            }
        ?>
    </body>
</html>