<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pharmacy Management System</title>
    <link rel="stylesheet" href="dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- pharmacy info -->
    <?php
    if(isset($_POST['submit'])) {
        //echo "was clicked";

        $pharmacy_name = $_POST['name'];
        $address = $_POST['address'];
        $phone_number = $_POST['phone'];
        $email = $_POST['email'];

    }
    
    ?>
    <!--Wrapper-->
    <div class="wrapper">
        <section>
            <center>
                <header>
                    Pharmacy Account Information
                </header>
            </center>
            <!--pharmacy account info starts here-->
            <form action="pharmacy_info_inc.php" class="header" method="post">

            <!-- Store the general information from the general information table  --->

            <input type="hidden" name="name" value="<?php echo $pharmacy_name;?>">
            <input type="hidden" name="address" value="<?php echo $address;?>">
            <input type="hidden" name="phone" value="<?php echo $phone_number;?>">
            <input type="hidden" name="email" value="<?php echo $email;?>">

                <div class="field input">
                    <lable for="">Pharmacy Opening Date</lable>
                    <input type="date" name="opening_date" placeholder="Provide Pharmacy Opening Date">
                </div>

                <div class="field input">
                    <lable for="">Pharmacy Closing Date</lable>
                    <input type="date" name="closing_date" placeholder="Provide Pharmacy Closing Date">
                </div>

                <div class="field input">
                    <lable for="">Opening Balance</lable>
                    <input type="number" name="opening_balance" placeholder="Provide Pharmacy Opening Balance">
                </div>

                <div class="field input">
                    <lable for="">Closing Balance</lable>
                    <input type="text" name="closing_balance" placeholder="Provide Pharmacy closing Balance">
                </div>

                <div class="field button">
                    <input type="submit" name="submit" value="SUBMIT">
                </div>

            </form>
            <!--pharmacy account info ends here --->
            
            
        </section>
    </div>
    
</body>
</html>