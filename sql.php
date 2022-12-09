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

function deleteaccount2() {    
    $ID = $_GET["ID"];
    $sql = "DELETE FROM accounts WHERE ID = $ID";

    $sql;
 
    if ($conn->query($sql) === TRUE) {
        echo "Account deleted successfully!";
    }
    else {
        echo "ERROR deleting Account";
    }
}

function addaccount() {

    $user = $_GET["username_input"];
    $pw = $_GET["password_input"];
    $pw = $_GET["password_input"];
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
   
    // $user_input = INPUT_GET["#username_input"];                    value-selector und id selector fehlt
    // $user = SELECT username FROM account WHERE username = $user_input;
    
    // $pw_input = INPUT_GET["#password_input"];                      value-selector und id selector fehlt
    // $pw = SELECT pw FROM account WHERE pw = $pw_input;

    // $pw_confirm = INPUT_GET["#password_confirm"];                 value-selector und id selector fehlt

    $message = "Die angegebenen Informationen sind falsch.";

    if ($user === TRUE && $pw === TRUE && $pw_confirm === $pw) {
        // open("/index_web_referat_s1.html", "_self");
    }
    else {
        echo "<script type='text/javascript'>alert('$message');</script>";
    }
}

function kommentieren() {
    //placeholder
}

// $conn->close();

?>