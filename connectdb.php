<?php
//enter your database detals here

$servername = "project-db-instance.cshyrcbvzyje.us-west-2.rds.amazonaws.com";
$username = "project_user";
$password = "project1234";
$dbname = "project_user";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
    destroy_session();
}

/*try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully"; 
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }*/
?>
