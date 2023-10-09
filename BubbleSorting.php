<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bubble Sort</title>
</head>
<body>
    <h1>Bubble Sort</h1>

    <form method="post">
        <label for="numbers">Enter a list of numbers (comma-separated):</label>
        <input type="text" name="numbers" id="numbers" required>
        <input type="submit" value="Sort">
    </form>

    <?php
    // Function to perform bubble sort
    function bubbleSort($arr) {
        $n = count($arr);

        do {
            $swapped = false;

            for ($i = 0; $i < $n - 1; $i++) {
                if ($arr[$i] > $arr[$i + 1]) {
                    // Swap $arr[$i] and $arr[$i + 1]
                    $temp = $arr[$i];
                    $arr[$i] = $arr[$i + 1];
                    $arr[$i + 1] = $temp;

                    $swapped = true;
                }
            }
        } while ($swapped);

        return $arr;
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $inputNumbers = $_POST["numbers"];

        
        // Split the comma-separated numbers into an array
        $numbersArray = explode(",", $inputNumbers);

        // Remove leading and trailing whitespace from each element
        $numbersArray = array_map('trim', $numbersArray);

        // Remove empty elements
        $numbersArray = array_filter($numbersArray);

        // Convert the elements to integers
        $numbersArray = array_map('intval', $numbersArray);

        if (count($numbersArray) > 0) {
            echo "<p>Original numbers: " . implode(", ", $numbersArray) . "</p>";
            $sortedNumbers = bubbleSort($numbersArray);

            echo "<p>Sorted numbers: " . implode(", ", $sortedNumbers) . "</p>";
        } else {
            echo "<p>Please enter a valid list of numbers.</p>";
        }
    }
    ?>
</body>
</html>
