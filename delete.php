<?php
require_once "connect.php";

$query = "";

$stmt = $con->prepare($query);

$id = $_POST['iduser'];

$stmt->bindValue(':iduser', $id);

if ($stmt->execute()){
    echo "Registro deletado";
}else{
    echo "Registro deletado com sucesso";
}
?>

