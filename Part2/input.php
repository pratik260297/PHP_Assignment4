<?php

ini_set('display_startup_errors', 1);
require('mysqli_oop_connect.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (!empty($_POST['username']) && !empty($_POST['message'])) {
        $query = "INSERT INTO messages(username, message) VALUES (?, ? )";

        $statement = mysqli_prepare($mysqli, $query);

        $statement->bind_param('ss', $username, $message);
        $username = $_POST['username'];
        $message = $_POST['message'];

        if ($statement->execute()) {
            echo " Successful";
        } else {
            echo "Failure";
        }
        $statement->close();
        unset($statement);

        $connect->close();
        unset($connect);
    }
}