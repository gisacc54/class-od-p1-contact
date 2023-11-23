<?php


require "../db/db.php";

$results = [];
if (isset($_GET["id"])) {
    $contactId = $_GET['id'];
    $sql = "delete from contacts where id =".$contactId;
    $stm = $conn->prepare($sql);
    $stm->execute();
    header('location: ../');

}