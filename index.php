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
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $bif = htmlspecialchars($_POST["BIF"]);
        $intBif = floatval($bif);
        $euroExhangeRate = 0.00032;
        $euroAmount = $intBif * $euroExhangeRate;
        header("Location: ../index.php");
    }

    ?> -->
    <main>
        <h1>Welcome to Burundi plaza</h1>
        <form action="./includes/formHandler.php" method="post">
            <label for="BIF">BIF:</label>
            <input id="bif" name="BIF" type="text" placeholder="1">

            <label for="EURO">EURO:</label>
            <input name="EURO" type="text" placeholder="0.00032" readonly>
            <button type="submit">Exchange</button>

        </form>
    </main>
</body>

</html>