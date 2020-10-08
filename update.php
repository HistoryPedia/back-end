<?php
require_once "connect.php";
try{
    $query = "UPDATE user SET name=:name, email=:email, senha=:senha WHERE iduser = :iduser";

    $stmt = $con->prepare($query);

    $iduser = $_POST['iduser'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $stmt->bindValue(':name', $name);
    $stmt->bindValue(':email', $email);
    $stmt->bindValue(':senha', $senha);
    $stmt->bindValue(':iduser', $iduser);

    if($stmt->execute()){
        header('location: ../front-end/index.php');
    }else{
        echo "<div class='alert alert-danger'>Não foi possível atualizar o
        registro. Tente novamente.</div>";
    }
}catch(PDOException $exception){
    die('ERROR: ' . $exception->getMessage());
    }
?>