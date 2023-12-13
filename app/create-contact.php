<?php
require '../db/db.php';

if (isset($_POST['submit'])){
    $fullName = $_POST['full_name'];
    $phoneNumber = $_POST['phone_number'];
    $email = $_POST['email'];
    $website = $_POST['website'];
    $address = $_POST['address'];
    $userId = $_POST['user_id'];

    try {
        if ($fullName == '' || $phoneNumber == '' || $email == '' || $address == '' || $website == ''){
            throw new PDOException("Fail");
        }
        $sql = "insert into contacts (name,phone_number,email,website,address,user_id) values ('$fullName','$phoneNumber','$email','$website','$address','$userId')";
        $conn->exec($sql);
        header('location: ../?success=Contact created successfully');
    }catch (PDOException $e){
       header('location: ../create.php?error=Fail to create contact');
    }
}else{
    header('location: ../');
}
