<?php
require 'app/view-contacts.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title>Page Title</title>
    <link rel="stylesheet" href="css/app.css">
</head>
<body>
<div class="container">
    <div class="row">
        <h1>
           Contact Management system
        </h1>
    </div>
    <div class="grid-container">

        <div class="col-6" >
            <a href="create.php" class="btn pull-right" style="">
                Create Contact
            </a>
        </div>
    </div>
    <table>
        <thead>
        <tr>
            <th>SN</th>
            <th>Full Name</th>
            <th>Phone number</th>
            <th>Email</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        <?php
        $i = 1;
        foreach ($contacts as $contact){
            ?>
            <tr>
                <td><?=$i?></td>
                <td><?=$contact['name']?></td>
                <td><?=$contact['phone_number']?></td>
                <td><?=$contact['email']?></td>
                <td>
                    <a href="view.php?id=<?=$contact['id']?>">view</a>
                </td>
            </tr>
            <?php
            $i++;
        }
        ?>
        </tbody>
    </table>
</div>
<!-- /.container -->
</body>
</html>