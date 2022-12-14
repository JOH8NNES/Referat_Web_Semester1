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

    $delete = $conn->query($sql);
 
    if ($delete === TRUE) {
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

    $smth = $conn->query($stmt);

    if ($smth === TRUE) {
        echo "Account added successfully!";
    }
    else {
        echo "ERROR adding Account!";
    }
}

function login() {
   
    $user_input = $_GET["username_input"];
    $user = "SELECT username FROM account WHERE username = $user_input";
    
    $pw_input = $_GET["password_input"];
    $pw = "SELECT pw FROM account WHERE pw = $pw_input";

    $pw_confirm = $_GET["password_confirm"];

    $message = "Die angegebenen Informationen sind falsch.";

    if ($user === TRUE && $pw === TRUE && $pw_confirm === $pw) {
        echo '<meta http-equiv="refresh" content="0; URL=./index_web_referat_s1.html">';

    }
    else {
        echo "<script type='text/javascript'>alert('$message');</script>";
    }
}

function kommentieren() {
    $input = $_GET["Kommentar"];
    $date_of_comment = date("Y/m/d");
    $uname = $_GET["username_input"];

    $put = "INSERT INTO comments (ID primary, username, comment, date_of_comment) VALUES (auto, $uname, $input, $date_of_comment)";

    $output = $conn->query($put);

    if ($put === TRUE) {
        echo "Posted successfully!";
    }
    else {
        echo "ERROR posting!";
    }
}

function spieleladen() {
    $game = "SELECT img, Titel FROM games";
    $game_output = $conn->query($game);

    if ($game_output->num_rows > 0) {
        while ($row = $game_output->fetch_assoc()) {
            echo $row["img"] . $row["Titel"] . "<br>";
        }
    }
    
}
// $conn->close();

?>