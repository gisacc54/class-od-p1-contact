<?php
require '../db/db.php';

if (isset($_POST['submit'])){
    $fullName = $_POST['full_name'];
    $phoneNumber = $_POST['phone_number'];
    $email = $_POST['email'];
    $website = $_POST['website'];
    $address = $_POST['address'];

}else{
    print "Not submitted";
}
