
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
 <h1> Welcome to PHP Programming </h1>

<?php

echo"Welcome to php programming <br>";

for ($i = 1; $i <= 30; $i++) {
    if ($i % 3 == 0 && $i % 5 == 0) {
        echo "FIZZBUZZ<br>";
    } elseif ($i % 3 == 0) {
        echo "FIZZ<br>";
    } elseif ($i % 5 == 0) {
        echo "BUZZ<br>";
    } else {
        echo $i . "<br>";
    }
}






























































?>
</body>
</html>

