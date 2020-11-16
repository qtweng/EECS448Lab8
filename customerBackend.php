<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Labs</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
//access the global array called $_POST to get the values from the text fields
$username = $_POST["username"];
$password = $_POST["password"];
$items = array("Candles", "Jails", "Umbrellas");
$costs = array(29.99, 11.89, 8.99);
$counts = array($_POST["candle"], $_POST["jail"], $_POST["umbrella"]);
$shipping = $_POST["shipping"];
echo "<div> Welcome {$username}!</div>";
echo "<div> Password: {$password}</div>";
function process(){
    $total = 0;
    echo '<table id="receipt">';
    echo "<tr><th></th><th>Quantity</th><th>Cost Per Item</th><th>Sub Total</th></tr>";
    for ($i = 0; $i < count($GLOBALS["items"]); $i++) {
        echo "<tr><th>{$GLOBALS["items"][$i]}</th>"; //items
        echo "<td>{$GLOBALS["counts"][$i]}</td>";
        echo "<td>{$GLOBALS["costs"][$i]}</td>";
        echo "<td>" . $GLOBALS["costs"][$i]*$GLOBALS["counts"][$i] . "</td></tr>"; //subtotal
        $total += $GLOBALS["costs"][$i]*$GLOBALS["counts"][$i];
    }
    echo "<tr><th>Shipping</th>"; //shipping
    echo '<td colspan="2">' . "{$GLOBALS["shipping"]}</td>";
    if ($GLOBALS["shipping"] == "Free") {
        echo "<td>$0.00</td>";
    } elseif ($GLOBALS["shipping"] == "Express") {
        echo "<td>$50.00</td>";
        $total += 50;
    } else {
        echo "<td>$5.00</td>";
        $total += 5;
    }
    echo '</tr><tr><th colspan="3">' . "Total Cost</th><th>{$total}</th></tr>";
    echo "</table>";
}
process();
?>
<html>
</div>
</html>