<?php

    require "conn.php";
if(isset($_POST['submit'])){
    //echo "Sure was clicked";

    $name = $_POST['name'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];
    $opening_date = $_POST['opening_date'];
    $closing_date = $_POST['closing_date'];
    $opening_balance = $_POST['opening_balance'];
    $closing_balance = $_POST['closing_balance'];
    $email = $_POST['email'];

    echo $name;
    echo $address;
    echo $phone;
    echo $opening_date;
    echo $closing_date;
    echo $opening_balance;
    echo $closing_balance;
    echo $email;
    


    $query = "INSERT INTO pharmacy_info SET
        name = '$name',
        address = '$address',
        phone = '$phone',
        opening_date = '$opening_date',
        closing_date = '$closing_date',
        opening_balance = '$opening_balance',
        closing_balance = '$closing_balance',
        email = '$email'
    ";

    $res = mysqli_query($conn, $query);
    if($res = TRUE) {
        header("index.php");
    }



}
?>