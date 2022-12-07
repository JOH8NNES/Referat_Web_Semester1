<?php
$servername = "localhost";
$username = "dbuser";
$password = "EPmV]Q!vFVw(E4-b";
$dbname = "db_web_referat_s1";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// $ID = $GET["ID"];

function deleteaccount() {    
    $ID = $_GET["ID"];
    $sql = "DELETE FROM accounts WHERE ID = $ID";

    $sql;
 
    if ($conn->query($sql) === TRUE) {
        echo "Account deleted successfully!";
    } else {
        echo "ERROR deleting Account";
    }
}

function addaccount() {

    // $user = INPUT_GET["#username_input"];
    // $pw = INPUT_GET["#password_input"];
    // $pw = #password_input.value;
    $date_of_creation = date("Y/m/d");

    $stmt = "INSERT INTO accounts (ID primary, username, pw, date_of_creation) VALUES (auto, $user, $pw, $date_of_creation)";

    $stmt;

    if ($stmt === TRUE) {
        echo "Account added successfully!";
    }
    else {
        echo "ERROR adding Account!";
    }
}

function login() {
    // $user = ;
    // $user_input = INPUT_GET["#username_input"];
}

// $conn->close();

?>