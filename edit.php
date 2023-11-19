<!DOCTYPE html>
<html>
<head>
    <title>Page Title</title>
    <link rel="stylesheet" href="css/app.css">
</head>
<body>
<div class="container">
    <form id="contact" action="" method="post">
        <h3>Edit  Contact</h3>
        <fieldset>
            <input placeholder="Full name" type="text" tabindex="1" required autofocus>
        </fieldset>
        <fieldset>
            <input placeholder="Phone Number" type="tel" tabindex="3" required>
        </fieldset>
        <fieldset>
            <input placeholder="Email Address" type="email" tabindex="2" required>
        </fieldset>
        <fieldset>
            <input placeholder="Web Site starts with http://" type="url" tabindex="4" required>
        </fieldset>
        <fieldset>
            <textarea placeholder="Address..." tabindex="5" required></textarea>
        </fieldset>
        <fieldset>
            <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Edit Contact</button>
        </fieldset>
    </form>


</div>
</body>
</html>