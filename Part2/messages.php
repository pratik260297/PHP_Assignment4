<?php

require('mysqli_oop_connect.php');

$q1 = "select * from messages";
$r = @mysqli_query($mysqli, $q1);
while ($row = $r->fetch_assoc()) {
    echo '<p>Username:' . $row['username'] . '</p>';
    echo '<p>Messages:' . $row['message'] . '</p>';
}