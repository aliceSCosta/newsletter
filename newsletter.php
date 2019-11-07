<?php
 
    $arquivo = fopen("email.txt", "a") or die("Não foi possível encontrar o arquivo");

    $emails = $_GET['email'] . "\n";
    fwrite($arquivo, $emails);  

    

    $arquivo = fopen("email.txt", "r") or die("Não foi possível encontrar o arquivo");

    $num_linhas = 0

    while(!feof($arquivo)){
        echo fgets($arquivo) . "<br><br>";

        if($linha = fgets($arquivo)){

            $num_linhas++;
        }
    }

    echo "Número de linhas: " . $num_linhas;
