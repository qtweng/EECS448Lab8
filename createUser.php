<?php

$mysqli = new mysqli("mysql.eecs.ku.edu", "qitaoweng", "xohg7ieP",
"qitaoweng");

$username = $_POST["username"];

/* check connection */
if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}
$new_user = "INSERT INTO Users (user_id) 
            VALUES ('".$username."')";
if ($mysqli->query($new_user) === TRUE) {
    echo "New user created successfully";
} else {
    echo "Error: " . $new_user . "<br>" . $mysqli->error;
}


/* close connection */
$mysqli->close();


?>