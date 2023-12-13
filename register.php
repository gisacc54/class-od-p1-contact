<!DOCTYPE html >
<html >
<head>
    <title>SpringTime</title>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
    <style type="text/css">
        #main{
            display: flex;
            justify-content: center;
            margin-top: 150px;
        }
        .size4 {
            width: 360px;
        }
        .button{
            text-decoration: none;
        }
        .box{
            margin-bottom: 0;
        }
    </style>
</head>
<body>
<!-- Container -->
<div id="container">
    <div class="shell">
        <!-- Main -->
        <div id="main">
            <!-- Content -->
            <div id="container">
                <?php include 'partials/response.php' ?>
                <!-- Box -->
                <div class="box" style="width: 400px">
                    <!-- Box Head -->
                    <div class="box-head">
                        <h2>Register</h2>
                    </div>
                    <!-- End Box Head -->
                    <form action="app/register.php" method="post">
                        <!-- Form -->
                        <div class="form">
                            <p>
                                <label>Full Name </label>
                                <input type="text" class="field size4" name="full_name" placeholder="Enter Full Name" />
                            </p>
                            <p>
                                <label>Phone Number </label>
                                <input type="text" class="field size4" name="phone_number" placeholder="Enter Phone Number"/>
                            </p>
                            <p>
                                <label>Password </label>
                                <input type="password" class="field size4" name="password" placeholder="Enter Password" />
                            </p>
                            <p>
                                <label>Confirm Password </label>
                                <input type="password" class="field size4" name="confirm_password" placeholder="Enter Confirm Password"/>
                            </p>
                        </div>
                        <!-- End Form -->
                        <!-- Form Buttons -->
                        <div class="buttons">
                            <a href="login.php" class="button">Back to Login</a>
                            <input type="submit" class="button" value="Register" name="submit"/>
                        </div>
                        <!-- End Form Buttons -->
                    </form>
                </div>
                <!-- End Box -->
            </div>
            <!-- End Content -->
        </div>
        <!-- Main -->
    </div>
</div>
<!-- End Container -->
</body>
</html>

