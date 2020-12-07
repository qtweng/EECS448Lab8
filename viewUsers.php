<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
$mysqli = new mysqli("mysql.eecs.ku.edu", "qitaoweng", "xohg7ieP",
"qitaoweng");


/* check connection */
if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}

$query = "SELECT * FROM Users";
if ($result = $mysqli->query($query)) {
    echo "<table>";
    /* fetch associative array */
    while ($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["user_id"] . "</td></tr>"; 
    }
    echo "</table>";
    /* free result set */
    $result->free();
}

/* close connection */
$mysqli->close();


?>