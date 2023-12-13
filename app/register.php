<?php

require '../db/db.php';
if (isset($_POST['submit'])){

    $name = $_POST['full_name'];
    $phoneNumber = $_POST['phone_number'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirm_password'];

    try {
        if ($name == '' || $phoneNumber == '' || $password == ''){
            throw new PDOException('Please complete all required fields');
        }

        if ($password != $confirmPassword){
            throw new PDOException('Password does not match');
        }
        $hashPass = password_hash($password,PASSWORD_BCRYPT);


        $sql = "insert into users (name,phone_number,password) values (:name,:phone_number,:password)";

        $stm = $conn->prepare($sql);
        $stm->bindParam(':name',$name);
        $stm->bindParam(':phone_number',$phoneNumber);
        $stm->bindParam(':password',$hashPass);



        $stm->execute();

        header('location: ../login.php?success=Account created successful');
    }catch (PDOException $exception){
        header('location: ../register.php?error='.$exception->getMessage());
    }
}