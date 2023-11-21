<?php require 'app/view-contact.php'?>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/view.css">
    <script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>
</head>
<body>

<h2>Card</h2>

<?php
if (count($results)>0){
    $contact = $results[0];
    ?>
    <div class="card">
        <img src="images/ceo2.webp" alt="Avatar" height="300">
        <div class="container">
            <h4 style="color: white; width: 200px; font-size: 20px;"><b><?=$contact['name']?></b></h4>
            <p style="color: rgb(163, 150, 150); margin-top: 0; font-size: 15px;"><?=$contact['address']?></p>
            <div style="display: flex; flex-direction: row;">
        <span class="iconify" data-icon="fluent:call-16-filled" data-inline="false"
          style="color: #ffa31a;"></span>
                <p style="color: white;"><?=$contact['phone_number']?></p>
            </div>
            <div style="display: flex; flex-direction: row; ">
        <span class="iconify" data-icon="fluent:mail-28-filled" data-inline="false"
              style="color: #ffa31a;"></span>
                <p style="color: white;">t<?=$contact['email']?></p>
            </div>
        </div>
    </div>
    <?php
}
?>

</body>
</html>