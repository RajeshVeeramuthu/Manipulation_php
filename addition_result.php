<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];
    $sum = $num1 + $num2;
    echo "Sum of $num1 and $num2 is: $sum";
}
?>
