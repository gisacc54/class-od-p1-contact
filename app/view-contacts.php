<?php

require "db/db.php";

$sql = "Select * from contacts where user_id = ".$_SESSION['id'];

$statement = $conn->prepare($sql);
$statement->execute();

$contacts = $statement->fetchAll(PDO::FETCH_ASSOC);

