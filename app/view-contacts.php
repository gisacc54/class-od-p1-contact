<?php

require "db/db.php";

$sql = "Select * from contacts";

$statement = $conn->prepare($sql);
$statement->execute();

$contacts = $statement->fetchAll(PDO::FETCH_ASSOC);

