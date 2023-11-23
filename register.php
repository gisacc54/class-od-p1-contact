<!DOCTYPE html>
<html>
<head>
    <title>Page Title</title>
    <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" href="css/form.css">
</head>
<body>
<div class="container">
    <form id="contact" action="app/create-contact.php" method="post">
        <h3>Register</h3>
        <fieldset>
            <input placeholder="Full name" type="text" tabindex="1" name="full_name" required autofocus>
        </fieldset>
        <fieldset>
            <input placeholder="Phone Number" type="tel" tabindex="3" name="phone_number" required>
        </fieldset>
        <fieldset>
            <input placeholder="Email Address" type="email" tabindex="2" name="email" required>
        </fieldset>
        <fieldset>
            <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Register</button>
        </fieldset>
    </form>


</div>
</body>
</html>