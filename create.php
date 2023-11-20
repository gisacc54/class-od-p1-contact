<!DOCTYPE html>
<html>
<head>
    <title>Page Title</title>
    <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" href="css/form.css">
</head>
<body>
<div class="container">
    <form id="contact" action="app/create.php" method="post">
        <h3>Create  Contact</h3>
        <fieldset>
            <input placeholder="Full name" type="text" tabindex="1" name="name" required autofocus>
        </fieldset>
        <fieldset>
            <input placeholder="Phone Number" type="tel" tabindex="3" name="phone_number" required>
        </fieldset>
        <fieldset>
            <input placeholder="Email Address" type="email" tabindex="2" name="email" required>
        </fieldset>
        <fieldset>
            <input placeholder="Web Site starts with http://" type="url" tabindex="4" name="website" required>
        </fieldset>
        <fieldset>
            <textarea placeholder="Address..." tabindex="5" required name="address"></textarea>
        </fieldset>
        <fieldset>
            <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Save Contact</button>
        </fieldset>
    </form>


</div>
</body>
</html>