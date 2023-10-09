<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <style>
        
    </style>
</head>
<body>
<h1> Welcome to PHP Programming </h1>

<form method="post">
    <label for="terms">Enter the number of terms in the Fibonacci series:</label>
    <input type="number" name="terms" id="terms" min="1" required>
    <input type="submit" value="Generate Fibonacci Series">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
    function generateFibonacciSeries($terms) {
        $fibonacciSeries = array();

        if ($terms >= 1) {
            $fibonacciSeries[] = 0;
        }
        if ($terms >= 2) {
            $fibonacciSeries[] = 1;
        }

        for ($i = 2; $i < $terms; $i++) {
            $fibonacciSeries[] = $fibonacciSeries[$i - 1] + $fibonacciSeries[$i - 2];
        }

        return $fibonacciSeries;
    }

    $terms = $_POST["terms"];

    if ($terms <= 0) {
        echo "Please enter a valid positive number of terms.\n";
    } else {
        $fibonacciSeries = generateFibonacciSeries($terms);

        echo "Fibonacci series with $terms terms:\n";
        foreach ($fibonacciSeries as $term) {
            echo $term . " ";
        }
        echo "<br>";
    }
}


?>
<?php



$min = 1;
$max = 100;
$randomNumber = rand($min, $max);
echo "Random Number: " . $randomNumber;

?>


</body>
</html>
