<?php
define('HOST', '127.0.0.1');
define('USERNAME', 'root');
define('PASSWORD', '123');
define('DB', 'storagegodb');

$mysqli = mysqli_connect(HOST, USERNAME, PASSWORD, DB);

if($mysqli->error){
    die("Falha ao conectar ao banco de dados: " . $mysqli->error);
}

?> 