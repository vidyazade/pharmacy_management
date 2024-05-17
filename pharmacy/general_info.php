<?PHP
    require('conn.php');
        $sql = "SELECT * FROM pharmacy_info";

        $res = mysqli_query($conn,$sql);
        $count = mysqli_num_rows($res);

            if ($count > 0) {
                $row = mysqli_fetch_assoc($res);
                header("index.php");
            }

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
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
                      Pharmacy General Information
                </header>
            </center>
            <!--pharmacy general information form starts here-->
            <form action="accounts_info.php" class="header" method="post">
                
                <div class="field input">
                    <lable for="">Pharmacy Name</lable>
                    <input type="text" name="name" placeholder="kindly Provide the Pharmacy Name">
                </div>

                <div class="field input">
                    <lable for="">Address</Address></lable>
                    <input type="text" name="address" placeholder="provide the pharmacy address">
                </div>

                <div class="field input">
                    <lable for="">Phone Number</lable>
                    <input type="numder" name="phone" placeholder="provide the phone number">
                </div>

                <div class="field input">
                    <lable for="">Email</lable>
                    <input type="text" name="email" placeholder="email Id">
                </div>

                <div class="field button">
                    <input type="submit" name="submit" value="CONTINUE">
                </div>

            </form>
            <!--pharmacy general information form ends here-->
            
        </section>
    </div>
    
</body>
</html>