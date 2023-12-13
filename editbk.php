<?php
require 'app/view-contact.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title>Page Title</title>
    <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" href="css/form.css">
</head>
<body>
<div class="container">
    <?php
    $contact = $results[0];
    ?>
    <form id="contact" action="app/edit-contact.php" method="post">
        <input type="hidden" name="id" value="<?=$contact['id']?>">
        <h3>Edit  Contact</h3>
        <fieldset>
            <input placeholder="Full name" type="text" tabindex="1" name="full_name" required autofocus value="<?=$contact['name']?>">
        </fieldset>
        <fieldset>
            <input placeholder="Phone Number" type="tel" tabindex="3" name="phone_number" required value="<?=$contact['phone_number']?>">
        </fieldset>
        <fieldset>
            <input placeholder="Email Address" type="email" tabindex="2" name="email" required value="<?=$contact['email']?>">
        </fieldset>
        <fieldset>
            <input placeholder="Web Site starts with http://" type="url" tabindex="4" name="website" required value="<?=$contact['website']?>">
        </fieldset>
        <fieldset>
            <textarea placeholder="Address..." tabindex="5" required name="address"><?=$contact['address']?></textarea>
        </fieldset>
        <fieldset>
            <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Edit Contact</button>
        </fieldset>
    </form>


</div>
</body>
</html>