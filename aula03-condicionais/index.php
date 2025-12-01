<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //condicional if
    if(1 < 2){
          echo "O número 1 é menor <br>";
    }
    
    $idade = 18;

    if($idade >= 18) { 
        echo "Você é maior de idade. ";
    } 

    echo "<br>";
     
    //condicional else
    $a = 10;
    $b = 14;

    if($a == $b){
        echo "As variáveis são iguais.";
    } else {
        echo "As variáveis são diferentes.";
    } 

    echo "<br>";

    //condicionais elseif
    $idadepessoa = 25;
    if($idadepessoa < 13){
        echo "Você é criança.";
    } else if ($idadepessoa >=13 && $idadepessoa <= 19) {
        echo " você é adolescente.";
    } else if($idadepessoa >= 20 && $idadepessoa <= 59) {
        echo "você é adulto.";
    } else {
        echo "você é idoso.";
    } 

    echo "<br>";

    //condicional switch
    $numero = 3;

    switch(true) {
        case($numero < 5):
        echo " O número é menor que 5.";
        break;
        case($numero == 5):
        echo "O númeor é igual a 5.";
        break;
        case($numero > 5):
        echo "O número é maior que 5.";
        break;
        default:
        echo "número não indetificado!";
        break;
    } 

        echo "<br>";

        $animal = "gato";

    switch ($animal) {
        case "cachorro":
            echo "È um cachorro";
            break;

        case "peixe";
        echo "È um peixe";

    default: 
       // sò executa sem nemnhuma case anterior bateu
       echo "Animal não encontrado!";
       break;  
}     
     
    ?>
</body>
</html>