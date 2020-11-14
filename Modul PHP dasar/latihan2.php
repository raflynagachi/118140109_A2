<!DOCTYPE html>
<html>
<head></head>
<body>
    <?php
        $nama = [
            "lanirne", "fulan", "alexander",
            "napoleon", "kifuat", "samidi",
            "paijo", "dukindam", "aben", "udi"
        ];
        echo "Data acak: <br>";
        foreach($nama as $data){
            echo $data ." ";
        }
        echo "<br>";
        sort($nama);
        echo "Data terurut: <br>";
        foreach($nama as $data){
            echo $data ." ";
        }
    ?>    
</body>
</html>
