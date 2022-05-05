<?php
    $servidor = "localhost";
    $usuario = "id18706511_rafaela";
    $senha = "!Charizard1235";
    $dbname = "id18706511_storagego";    
    
    $conecta = mysqli_connect($servidor, $usuario, $senha, $dbname);
    
    if(!$conecta){
        die("Falha na conexao: " . mysqli_connect_error());
    }else{
        echo "Conexao realizada com sucesso";
    }
     
mysqli_close($conecta);
?> 