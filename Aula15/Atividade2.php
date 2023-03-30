<h2>Exercicio 2</h2>
<br>
<?php
    $cor = [];
    $cor[0]= "Yellow";
    $cor[1] = "Green";
    $cor[2] = "Blue";
    $cor[3]= "Pink";
    $cor[4]= "Red";
    $cor[5]= "Purple";
    $cor[6]= "Orange";
    $cor[7]= "Grey";
    $cor[8]= "White";

    foreach($cor as $key => $cor){
        echo "<a href='Atividade2.php?cor=$cor'>
            Mudar para $cor <br>

            </a>";
    }
    if(isset($_GET['cor'])){
        $cor = $_GET['cor'];
    
    }else{
        $cor = 'white';
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<style>
     body{
            background-color:<?php  echo $cor ?>;
        }

</style>
<br>
    
</body>
</html>