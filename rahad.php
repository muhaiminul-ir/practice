<?php 

ini_set('display_errors', 1);

$servername = "localhost";
$username = "root";
$password = "123456"; 
$database = "rahad";


$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$result = $conn->query("Select * from users where id = 3");


echo $result->num_rows;

// print_r($result->fetch_assoc());

// if($result->num_rows > 0)
// {
//     while ($row = $result->fetch_assoc()) {
//         echo "ID: " . $row["id"] . " - Name: " . $row["name"] . "<br>";
//     }
// }





 

?>