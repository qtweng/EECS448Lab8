<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
//access the global array called $_POST to get the values from the text fields
$questions = array("Question 1: What was the capital of Spain?", 'Question 2: How many nights are there in "Arabian Nights"?', 'Question 3: According to Forrest Gump, "life was like..."', "Question 4: Which U.S. state is known as the sunflower state?", "Question 5: Fe is the chemical symbol for...");
$responses = array($_POST["Q1"], $_POST["Q2"], $_POST["Q3"], $_POST["Q4"], $_POST["Q5"]) ;
$answers = array("Madrid", "1001", "A box of chocolates", "Kansas", "Iron");
$n = count($questions); //number of questions
function displayResults($n) {
    $total = $n; //total possible points is number of questions
    $points = 0;
    for ($i = 0; $i < $n; $i++) {
        echo "<div>{$GLOBALS["questions"][$i]}</div>";
        echo "<div>&emsp;You answered: {$GLOBALS["responses"][$i]}</div>";
        echo "<div>&emsp;Correct answer: {$GLOBALS["answers"][$i]}</div>";
        if ($GLOBALS["responses"][$i] == $GLOBALS["answers"][$i]) {
            $points++;
        }
    }
    echo "<div>Total correct: {$points}</div>";
    echo "<div>Score: " . ($points/$total*100) . "%</div>";
}
displayResults($n);
?>
