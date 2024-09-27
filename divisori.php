<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Divisori</title>
</head>
<body> 
    <?php
    $numero = rand(1,100);
    $cont = 0;

    echo "<h1> il numero e' " . $numero;

    for ($i=1; $i<=($numero/2); $i++){
       if ($numero%$i == 0){
        if ($cont==0){
            $lista = "<ul>";
            $cont++;
        }

            echo $lista . "<li>" . $i . "</li></ul>";

       }
    }

    ?>
    
</body>
</html>