<?php

$servername = "localhost";
$username = "dbuser";
$password = "EPmV]Q!vFVw(E4-b";
$dbname = "db_web_referat_s1";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

//get searchquery from url
$searchQuery = $_GET['q'];

//execute sql query
$sql = "SELECT Titel FROM games WHERE Titel LIKE '%$searchQuery%'";
$result = mysqli_query($conn, $sql);

$array = array();


while ($row = $result->fetch_assoc()) {
    // echo $row["Titel"];
    array_push($array, $row["Titel"]);
}

// print_r($array);

//process results
// $row = mysqli_fetch_assoc($result);
// $name = $row['Titel'];

//output
echo json_encode($array);

?>