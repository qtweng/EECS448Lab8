<?php

$mysqli = new mysqli("mysql.eecs.ku.edu", "qitaoweng", "xohg7ieP",
"qitaoweng");

$username = $_POST["username"];
$post = $_POST["post"];

/* check connection */
if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}
$check_author = "SELECT * FROM Users 
                WHERE  user_id = '" . $mysqli->real_escape_string($username) . "'";
$new_post = "INSERT INTO Posts (content, author_id)
            VALUES ('" . $mysqli->real_escape_string($post) . "', '" . $mysqli->real_escape_string($username) . "')";
$result = $mysqli->query($check_author);
if (mysqli_num_rows($result) > 0) {
    if ($mysqli->query($new_post) === TRUE) {
        echo "New post created successfully";
    } else {
        echo "Error: " . $new_post . "<br>" . $mysqli->error;
    }
} else {
    echo "Error: " . $username . " does not exist";
}

/* free result set */
$result->free();

/* close connection */
$mysqli->close();


?>