<?php
session_start();
require '../db/db.php';
if (isset($_POST['submit'])){
    $phoneNumber = $_POST['phone_number'];
    $password = $_POST['password'];

    try {
        $sql = "select * from users where phone_number = :phone_number";
        $stm = $conn->prepare($sql);
        $stm->bindParam(':phone_number',$phoneNumber);
        $stm->execute();
        $users = $stm->fetchAll(PDO::FETCH_ASSOC);
        if (!(count($users)>0)){
            throw new PDOException("Error");
        }
        $user = $users[0];
        if (!password_verify($password,$user['password'])){
            throw new PDOException("Error");
        }

        $_SESSION['id'] = $user['id'];
        $_SESSION['name'] = $user['name'];
        $_SESSION['phone_number'] = $user['phone_number'];

        header('location: ../?success=Login Successful! Welcome back, '.$user['name']);
    }catch (PDOException $exception){
        header('location: ../login.php?error=Incorrect Username or Password');
    }

}