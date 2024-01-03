<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <!-- <?php
    $currencyType = "euro";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $bif = htmlspecialchars($_POST["BIF"]);
        $intBif = floatval($bif);

        $currencyType = isset($_POST["currencyType"]) ? $_POST["currencyType"] : "euro";
        switch ($currencyType) {
            case "euro":
                $amount = $bif * 0.00032;
                break;
            case "dollar":
                $amount = $bif * 0.00035;
                break;
            case "krona":
                $amount = $bif * 0.0037;
                break;
        }

        echo $amount;

    }

    ?> -->
    <main>
        <h1>Welcome to Burundi plaza</h1>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <label for="BIF">BIF:</label>
            <input id="bif" name="BIF" type="text" placeholder="1">

            <label for="EURO">FOREIGN CURRENCY:</label>
            <select name="currencyType" id="currency">
                <option value="euro">€</option>
                <option value="dollar">$</option>
                <option value="krona">KR</option>
            </select>
            <button type="submit">Exchange</button>
            <span id="display" name="EURO" type="text">
                <?php echo $amount; ?>
            </span>
        </form>
    </main>
</body>

</html>