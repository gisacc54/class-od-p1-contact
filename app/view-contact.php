<?php


require "db/db.php";

$results =[];
if (isset($_GET["id"])){
    $contactId = $_GET['id'];
    $sql = "Select * from contacts where id = $contactId";

    $statement = $conn->prepare($sql);
    $statement->execute();

    $results = $statement->fetchAll(PDO::FETCH_ASSOC);

}
