<?php
    $servidor = "localhost";
    $usuario = "root";
    $senha = "usbw";
    $dbname = "storagego";    
    
    $conecta = mysqli_connect($servidor, $usuario, $senha, $dbname);
    
    if(!$conecta){
        die("Falha na conexao: " . mysqli_connect_error());
    }
    else{

        if(isset($_POST["username"]))
        {    
            $nome = $_POST["username"];
            $senha = $_POST["password"];   
    
            $result_usuario = mysqli_query("SELECT * FROM tb_usuario WHERE nome = '$nome' AND senha = '$password'")
            or die("erro no select");
        }
        if(mysql_num_rows($result_usuario)<=0)
        {
            echo"<script language='javascript' type='text/javascript'>
            alert('Login e/ou senha incorretos');</script>";
        }
        else{
            header("Location:sells.html");
        }
    }
     
mysqli_close($conecta);