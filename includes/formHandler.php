<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $bif = htmlspecialchars($_POST["BIF"]);

    if (empty($bif)) {
        exit("Enter the amount");
    }

    $intBif = floatval($bif);
    $euroExhangeRate = 0.00032;
    $euroAmount = $intBif * $euroExhangeRate;
    echo "$euroAmount";
    header("Location: ../index.php");
} else {
    header("Location: ../index.php");
}
