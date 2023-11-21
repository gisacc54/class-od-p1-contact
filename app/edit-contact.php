<?php
require '../db/db.php';

if (isset($_POST['submit'])){
    $id = $_POST['id'];
    $fullName = $_POST['full_name'];
    $phoneNumber = $_POST['phone_number'];
    $email = $_POST['email'];
    $website = $_POST['website'];
    $address = $_POST['address'];

    $sql = "update contacts set name='$fullName',phone_number='$phoneNumber',email='$email',website='$website',address='$address' where id=".$id;

    $stm = $conn->prepare($sql);
    $stm->execute();

    echo "Updated Successful";
    header('location: ../');
}
