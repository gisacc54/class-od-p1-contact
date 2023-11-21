<?php
require '../db/db.php';

if (isset($_POST['submit'])){
    $fullName = $_POST['full_name'];
    $phoneNumber = $_POST['phone_number'];
    $email = $_POST['email'];
    $website = $_POST['website'];
    $address = $_POST['address'];

    try {
        $sql = "insert into contacts (name,phone_number,email,website,address) values ('$fullName','$phoneNumber','$email','$website','$address')";
        $conn->exec($sql);
        echo "Contact created successful";
        header('location: ../');
    }catch (PDOException $e){
        echo "Error: ".$e->getMessage();
    }
}else{
    print "Not submitted";
}
