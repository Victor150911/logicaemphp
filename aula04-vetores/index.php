<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    //Criação de vetor?Array indexado
    $array = [10, 20, 30, 40];

    //Exiba o array
    echo "<h1>Array original</h1>: ";
    print_r($array); //print_r() exibe o array de forma legível
    
    echo "<br>";
    //Adiciona um valor ao final do array
    $array[] = 50;

    //Exibindo o array atualizado
    echo "<h1>Array após adicionar 50</h1>:<br>";
    print_r($array);

    echo "<br>";
    //Alterando o valor na posição 1 para 25
    $array[1] = 25;

    //Exibindo o array após a alteração
    echo " Array após alterar o valor na 1 para 25:<br>";
    print_r($array);
    
    echo "<br>";
    //Remova o valor na posição 2
    unset($array[2]);

    //Reorganizar os índices do array 
    $array = array_values($array);

    //Exibindo o array após remover o valor 
    echo "<h1>array após remover o valor na posíção 2</h1>:<br> ";
    print_r($array);

    echo "<br>";
    // adicionando vários valores 
    array_push($array, 60, 3, 22);
    print_r($array);
    
    echo "<br>";
    //Ordenando o vetor
    sort($array);

    //Exibindo o vetor ordenado 
    echo "<h1>Array após ordenar os valores</h1>:<br> ";
    print_r($array);

    echo "<br>";
    //Criando um aarray associativo 
    $associativo = [
        "nome" => "joão",
        "idade" => 30,
        "cidade" => "São Paulo"
    ];

    //Exibindo o array associativo
    echo "<h1>Array associativo</h1>:<br>";
    print_r($associativo);

    echo "<br>";
    //Criando um array multidimencional (matrizes)
    $multidimensional = [
        [1, 2, 3],
        [4, 5, 6],
        [7, 8, 9]
    ];

    //Exibindo o valor na posição [1][2] (4, 5, 6)-> 6
    echo "<h1>Valor na posição</h1> [1][2]" . $multidimensional[1][2];

    echo "<br>";
    $array1 = [1, 2, 3];
    $array2 = [4, 5, 6];

    //mesclando dois arrays
    $novo_array = array_merge($array1, $array2);

    //Exibindo o array resultante
    echo "<h1>array mesclado</h1>:<br> ";
    print_r($novo_array);


    echo "<br>";
    $numeros = [2, 4, 6, 30, 8];

    //procurando o valor 30 no array
    $indice = array_search(30, $numeros);
    

    //Exibindo o índice onde o valor foi encontrado 
    echo "O indice do valor 30 é: ". $indice;
    echo "<br>";
    print_r($numeros);

     echo "<br>";
     //função in_array()
    //Verifique se o valor 25 está no array 
    $existe = in_array(25, $numeros);

    //Exibindo se o valor existente ou não
    if($existe) {
        echo "O valor 25 está no array. ";
    } else{
        echo "O valor 25 não está no array.";
    }
    
    
     ?>
</body>
</html>