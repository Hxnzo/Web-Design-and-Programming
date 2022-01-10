<!doctype html>

<html>
    <head>
        <title>Restaurant Rating</title>
        <link rel="stylesheet" type="text/css" href="dashboardStyleSheet.css">
    </head>
    <body>
        <header>Restaurant Rating Results</header>
    </body>
</html>

<?php

$dbhost="localhost";
$dbuser="root";
$dbpass="";
$dbname="restaurantratingdb";
$connection=mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

$sql = "SELECT user_ID, first_name, last_name, email, phone FROM usersinfo";
$result = $connection->query($sql);

$sql2 = "SELECT user_ID, food_rate, menu_rate, service_rate, atmosphere_rate, transaction_date, remarks FROM ratinginfo";
$result2 = $connection->query($sql2);

$foodAve=null;
$menuAve=null;
$serviceAve=null;
$atmosphereAve=null;

if ($result->num_rows > 0 || $result2->num_rows > 0) 
{
    echo "<table><tr><th>User ID</th><th>First Name</th><th>Last Name</th><th>Email</th><th>Phone #</th><th>Food Rating</th><th>Menu Rating</th><th>Service Rating</th><th>Atmosphere Rating</th><th>Date</th><th>Remarks</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) 
    {
        while($row2 = $result2->fetch_assoc()) 
        {
            echo "<tr><td>" . $row['user_ID'] . "</td><td>" . $row['first_name'] . "</td><td>" . $row['last_name'] . "</td><td>" . $row['email'] . "</td><td>" . $row['phone'] . "</td><td>" . $row2['food_rate'] . "</td><td>" . $row2['menu_rate'] . "</td><td>" . $row2['service_rate'] . "</td><td>" . $row2['atmosphere_rate'] . "</td><td>" . $row2['transaction_date'] . "</td><td>" . $row2['remarks'] . "</td></tr>";
                             
            $foodAve = $foodAve + $row2['food_rate'];
            $menuAve = $menuAve + $row2['menu_rate'];
            $serviceAve = $serviceAve + $row2['service_rate'];
            $atmosphereAve = $atmosphereAve + $row2['atmosphere_rate'];
        }
    }

    echo "</table>";
} 
else 
{
    echo "0 results";
}

$userNum = $connection->query("SELECT user_ID, first_name, last_name, email, phone FROM usersinfo");

// it return number of rows in the table.
$numRows = mysqli_num_rows($userNum);
        
echo "<table><tr><td>Number of users that did the survey: " . $numRows . "</td></tr>";
echo "<tr><td>The average food rating is: ".$foodAve/$numRows . "</td></tr>";
echo "<tr><td>The average menu rating is: ".$menuAve/$numRows . "</td></tr>";
echo "<tr><td>The average service rating is: ".$serviceAve/$numRows . "</td></tr>";
echo "<tr><td>The average atmosphere rating is: ".$atmosphereAve/$numRows . "</td></tr></table>";

?>