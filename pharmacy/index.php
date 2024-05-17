<?php
require('conn.php');
$error = '';
session_start();
if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    //echo "$username";
    //echo "$password";

    $sql = "SELECT * FROM users WHERE username='$username' and password='$password'";
    $res = mysqli_query($conn, $sql);
    $count = mysqli_num_rows($res);
    if($count > 0){
        $row = mysqli_fetch_assoc($res);
        $_SESSION['ROLE']=$row['role'];
        $_SESSION['IS_LOGIN']='yes';
            if($row['role']=='admin'){
                $_SESSION['sessionId']=$row['id'];
                $_SESSION['sessionUsername']= $row['username'];
                header("Location:dashboard/index.php");
                die();
            }

            if($row['role']=='pharmacist'){
                $_SESSION['sessionId']=$row['id'];
                $_SESSION['sessionUsername']= $row['username'];
                header("Location:dashboard/pharmacist/index.php");
                die();
            }
            }else{
                $error="<div class='alert alert-danger'> please enter valid details </div>";
    }

}

?>
<!DOCTYPE html>
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
                    Login  Form
                </header>
            </center>
            <!--Login starts here-->
            <form action="" class="header" method="post">
                <div class="field input">
                    <lable for="">Username</lable>
                    <input type="text" name="Username" placeholder="kindly Provide your Username">
                </div>
                <div class="field input">
                    <lable for="">Password</lable>
                    <input type="password" name="Password" placeholder="kindly Provide your Password">
                </div>
                <div class="field button">
                    <input type="submit" name="Submit" value="LOGIN">
                </div>
                <div class="error-text"></div>
                <a href="register.php" class="link">Register Here..</a>

            </form>
            <!--Login ends here-->
            
        </section>
    </div>
    
</body>
</html>