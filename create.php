<?php
include 'middleware/auth.php';
include 'app/view-contacts.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title>SpringTime</title>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
    <style>
        #footer{
            position: fixed;
            left: 0;
            bottom: 0;
            width: 100%;
        }
        .box-content{
            height: 50px;
        }
        textarea.size1 {
            height: 80px;
        }
        .button{
            text-decoration: none;
        }
    </style>
</head>
<body>
<!-- Header -->
<?php include 'partials/header.php'?>
<!-- End Header -->
<!-- Container -->
<div id="container">
    <div class="shell">
        <!-- Small Nav -->
        <div class="small-nav"> <a href="#">Dashboard</a> <span>&gt;</span> Add New Contact </div>
        <!-- End Small Nav -->

        <br />

        <!-- Main -->
        <div id="main">
            <div class="cl">&nbsp;</div>
            <!-- Content -->
            <div id="content">
                <?php include 'partials/response.php' ?>
                <!-- Box -->
                <div class="box">
                    <!-- Box Head -->
                    <div class="box-head">
                        <h2>Add New Contact</h2>
                    </div>
                    <!-- End Box Head -->
                    <form action="app/create-contact.php" method="post">
                        <!-- Form -->
                        <div class="form">
                            <input type="hidden" value="<?=$_SESSION['id']?>" name="user_id">
                            <p>
                                <label>Full Name <span>(Required Field)</span></label>
                                <input type="text" class="field size1" name="full_name" placeholder="Enter Full Name" />
                            </p>
                            <p>
                                <label>Phone Number <span>(Required Field)</span></label>
                                <input type="tel" class="field size1" name="phone_number" placeholder="Enter Phone Number" />
                            </p>
                            <p>
                                <label>Email <span>(Required Field)</span></label>
                                <input type="email" class="field size1" name="email" placeholder="Enter Email" />
                            </p>
                            <p>
                                <label>Website <span>(Required Field)</span></label>
                                <input type="text" class="field size1" name="website" placeholder="Enter Website" />
                            </p>
                            <p>
                                <label>Address <span>(Required Field)</span></label>
                                <textarea class="field size1" rows="3" name="address" ></textarea>
                            </p>
                        </div>
                        <!-- End Form -->
                        <!-- Form Buttons -->
                        <div class="buttons">
                            <a href="./" class="button"  >back</a>
                            <input type="submit" class="button" name="submit" value="save" />
                        </div>
                        <!-- End Form Buttons -->
                    </form>
                </div>
                <!-- End Box -->
            </div>
            <!-- End Content -->
        </div>
        <div class="cl">&nbsp;</div>
    </div>
    <!-- Main -->
</div>
</div>
<!-- End Container -->
<!-- Footer -->
<?php include 'partials/footer.php'?>
<!-- End Footer -->
</body>
</html>
