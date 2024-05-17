<?php

if(isset($_POST['Submit'])){
    //echo "clicked";
    //connect to the databace
    require "conn.php";

    
    //collect data from the form
    $username = $_POST['username'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];
    $role = $_POST['role'];
    
    //error handler
    if(empty($username) || empty($password) || empty($confirm_password) || empty($role)){
        header("Location:../register.php?error=emptyfields&username=".$username);
        exit();

        //check for invalid fields
    }elseif (!preg_match("/^[a-zA-Z0-9]*/", $username)){
        header("location:..//register.php?error=invalidfields&username".$username);
        exit();
        //check if the password match

    }elseif ($password !== $confirm_password){
        header("Location:../register.php?error=passworddonotmatch&username".$username);
        exit();
        //check if the username is taken or not
    }else {
        $sql = "SELECT username FROM users WHERE username = ?";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)){
            header("Location:../register.php?error=sqlerror");
            exit();
        }else{
            mysqli_stmt_bind_param($stmt,"s",$username);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);
            $rowcount = mysqli_stmt_num_rows($stmt);
            if($rowcount > 0){
                header("Location:../register.php?error=usernameistaken&username".$username);
                exit();
                // Insert data into the database
            }else{
                $sql = "INSERT INTO users (username,role,password)values(?,?,?)";
                $stml = mysqli_stmt_init($conn);
                if(!mysqli_stmt_prepare($stmt,$sql)){
                    header("Location:../register.php?error=sqlerror");
                    exit();

                }else {
                    mysqli_stmt_bind_param($stml,"sss",$username, $password, $role, $confirm_password);
                    mysqli_stmt_execute($stml);
                    header("Location:dashboard/index-php?success=registered");
                }
            }
        }

    }
}
?>