<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>meu primeiro php</title>
</head>
<body>
     <h2>
     <?php
         echo "Meu primeiro php\u{1F600}";
        
        /*
        isso é um comentário
        com várias
        linhas
        */

        //Váriaveis
        $nome = "Victor";
        $Sobrenome = 'Hugo';
        
        //A variável pode ser mudada
        $nome = "Matos Paié";

        //Quebra de linha antes do proximo echo
        echo "<br> <br>";
        
        const time = "Palmeiras";
      
        echo "Meu time de futebol é " . time ;
        echo "<br> <br>";
        echo "seja bem-vinda, $nome, $Sobrenome";

        //tipos de dados
        $sobrenome2 = "Paié"; //string
        $idade = 16; //int
        $peso = 62.6; //float
        $solteiro = false; //boolean  

        echo "$sobrenome $idade $peso";

        //Método 1 : Usando var_dunp para exibir o valor do boolean
        var_dump($solteiro);
        echo " <br <br>";

        //Método 2 : Usando uma conversão para string 
        echo ($solteiro ? "solteiro"  :  "não é solteiro ");
        echo "<br> <br>";
      
        //tipos primitivos 
        var_dump($sobrenome);
        echo "<br>";
        var_dump($idade);
        echo "<br>";
        var_dump($peso);

        $frase = "Meu time de futebol é " .time;
        $frase2 = "Meu nome é $nome meu sobrenome é $sobrenome";
        echo($frase);
        echo"<br>";
        echo($frase2);



      ?>

     </h2>
     <p>Meu primeiro parágrafo</p> 
</body>
</html>