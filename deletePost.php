<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
$mysqli = new mysqli("mysql.eecs.ku.edu", "qitaoweng", "xohg7ieP",
"qitaoweng");

$posts = $_POST["posts"];

/* check connection */
if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}

if(isset($posts) && is_array($posts) ) {
    foreach($posts as $post) {
        $query = "DELETE FROM Posts 
        WHERE  post_id = '" . $mysqli->real_escape_string($post) . "'";
        if ($result = $mysqli->query($query)) {
            echo "Deleted post {$post}"; 
            echo "<br>";
        } else {
            echo "Error: " . $result . "<br>" . $mysqli->error;
        }
    }
}

/* close connection */
$mysqli->close();


?>