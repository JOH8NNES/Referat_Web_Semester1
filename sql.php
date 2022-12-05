<?php
$servername = "localhost";
$username = "dbuser";
$password = "EPmV]Q!vFVw(E4-b";
$dbname = "db_web_referat_s1";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$ID = $_GET["ID"];

echo $ID;

$sql = "DELETE FROM accounts WHERE ID = $ID";

if ($conn->query($sql) === TRUE) {
    echo "Account deleted successfully!";
}
else {
    echo "ERROR deleting Account: " . $conn->connect_error;
}

$conn->close();

?>