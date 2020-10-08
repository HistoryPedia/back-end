<?php
require_once('connect.php');

$consulta = $con->query("SELECT iduser, name, email, senha FROM user");

while($linha = $consulta->fetch(PDO::FETCH_ASSOC)){
    echo "ID: {$linha['iduser']} </br> 
        Nome: {$linha['name']} </br> 
        Email: {$linha['email']} </br> 
        Senha: {$linha['senha']} </br> </br>";
}

?>