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
    
        $nome = $_POST["username"];
        $senha = $_POST["password"];   

        if(isset($_POST["username"]))
        {    
            $result_usuario = "SELECT * FROM tb_usuario WHERE nome = '$nome' AND senha = '$senha'";
            $resultado_usuario = mysqli_query($conecta, $result_usuario);
        }
        if(mysqli_num_rows($resultado_usuario)<=0)
        {
            echo"<script language='javascript' type='text/javascript'>
            alert('Login e/ou senha incorretos');</script>";
        }
        else{
            header("Location:sells.html");
        }
    }
     
mysqli_close($conecta);