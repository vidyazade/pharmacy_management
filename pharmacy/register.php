<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pharmacy Management System</title>
    <link rel="stylesheet" href="dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!--Wrapper-->
    <div class="wrapper">
        <section>
            <center>
                <header>
                    Registration  Form
                </header>
            </center>
            <!--Login starts here-->
            <form action="register_inc.php" class="header" method="post">
                
                <div class="field input">
                    <lable for="">Username</lable>
                    <input type="text" name="Username" placeholder="kindly Provide your Username">
                </div>

                <div class="field input">
                    <lable for="">Password</lable>
                    <input type="password" name="Password" placeholder="kindly Provide your Password">
                </div>

                <div class="field input">
                    <lable for="">Confirm Password</lable>
                    <input type="password" name="confirm_Password" placeholder="kindly Confirm password">
                </div>

                <div class="field input">
                    <lable for="">Role</lable>
                    <input type="password" name="role" placeholder="kindly provide your role">
                </div>

                <div class="field button">
                    <input type="submit" name="Submit" value="REGISTER">
                </div>

                <div class="error-text"></div>

                <a href="index.php" class="link">Login Here..</a>

            </form>
            <!--Login ends here-->
            
        </section>
    </div>
    
</body>
</html>