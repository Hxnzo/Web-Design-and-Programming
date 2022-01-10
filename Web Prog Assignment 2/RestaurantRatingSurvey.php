<?php

if(!empty($_POST))
{
    $dbhost="localhost";
    $dbuser="root";
    $dbpass="";
    $dbname="restaurantratingdb";
    $connection=mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

    if(mysqli_connect_errno())
    {
        die("Database connection failed: " .mysqli_connect_error(). "(".mysqli_connect_errno().")" );
    }

    $sql = "INSERT INTO usersinfo (first_name, last_name, email, phone) VALUES
    (
        '{$connection->real_escape_string($_POST['fname'])}',
        '{$connection->real_escape_string($_POST['lname'])}',
        '{$connection->real_escape_string($_POST['email'])}',
        '{$connection->real_escape_string($_POST['phone'])}'
    )";

    $insert = $connection->query($sql);
    $last_ID = mysqli_insert_id($connection);

    $sql2 = "INSERT INTO ratinginfo (user_ID, food_rate, menu_rate, service_rate, atmosphere_rate, transaction_date, remarks, status) VALUES
    (
        '{$connection->real_escape_string($last_ID)}',
        '{$connection->real_escape_string($_POST['radio-buttons'])}',
        '{$connection->real_escape_string($_POST['radio-buttons2'])}',
        '{$connection->real_escape_string($_POST['radio-buttons3'])}',
        '{$connection->real_escape_string($_POST['radio-buttons4'])}',
        '{$connection->real_escape_string($_POST['calender'])}',
        '{$connection->real_escape_string($_POST['comments'])}',
        '{$connection->real_escape_string(0)}'
    )";

    $insert = $connection->query($sql2);

    if($insert == TRUE)
    {
        echo "<h1>Success! Thank you For your time!</h1>";
    }
    else
    {
        die("Error: {$connection->errno}:{$connection->error}");
    }
}

?>
