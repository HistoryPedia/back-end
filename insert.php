<?php
require_once "connect.php";
        $query = "INSERT INTO user (name, email, senha, avatar, user_type_iduser_type) VALUES (:name, :email, :senha, :avatar, 2)";
        
        $stmt = $con->prepare($query);

        $name = $_POST['name'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $avatar = $_POST['avatar'];

        $stmt->bindValue(':name', $name);
        $stmt->bindValue(':email', $email);
        $stmt->bindValue(':senha', $senha);
        $stmt->bindValue(':avatar', $avatar);

        if ($stmt->execute()) {
            header('location: ../front-end/perfil.php');
        } else {
            echo "Falha ao gerar cadastro.";
        }
?>