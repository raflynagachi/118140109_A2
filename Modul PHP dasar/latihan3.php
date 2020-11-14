<!DOCTYPE htm>
<html>
    <head></head>
    <body>
        <?php
            echo "Bilangan prima : <br>";
            for($i=2; $i<=50; $i++){
                $prima = TRUE;
                for($j=2; $j<$i; $j++){
                    if($i%$j==0){
                        $prima = FALSE;
                        break;
                    }
                }
                if($prima){
                    echo $i ." ";
                }
            }
        ?>
    </body>
</html>