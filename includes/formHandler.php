<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $bif = htmlspecialchars($_POST["BIF"]);
    $intBif = floatval($bif);
    $euroExhangeRate = 0.00032;
    $dollarExchangeRate = 0.00035;
    if ($intBif > $euroExhangeRate) {

    }
    $euroAmount = $intBif * $euroExhangeRate;
    echo "$euroAmount";
    header("Location: ../index.php");
}
