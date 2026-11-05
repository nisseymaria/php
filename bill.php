<?php
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    $units = (int)$_POST['units'];
    $rate = (int)$_POST['rate'];

    $total = $units * $rate;

    echo "Unit: " . $units . "<br>";
    echo "Rate: " . $rate . "<br>";
    echo "Total: " . $total;
}
?>