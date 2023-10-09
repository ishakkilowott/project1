<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selection Sort</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        h1 {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 10px;
        }

        form {
            max-width: 400px;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);
        }

        label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }

        input[type="text"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        input[type="submit"] {
            background-color: #333;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 3px;
            cursor: pointer;
        }

        p {
            margin: 10px 0;
        }

        .result {
            margin-top: 20px;
            padding: 10px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);
        }
    </style>
</head>
<body>
    <h1>Selection Sort</h1>

    <form method="post">
        <label for="numbers">Enter a list of numbers (comma-separated):</label>
        <input type="text" name="numbers" id="numbers" required>
        <input type="submit" value="Sort">
    </form>

    <?php
    // Function to perform selection sort
    function selectionSort($arr) {
        $n = count($arr);

        for ($i = 0; $i < $n - 1; $i++) {
            $minIndex = $i;

            for ($j = $i + 1; $j < $n; $j++) {
                if ($arr[$j] < $arr[$minIndex]) {
                    $minIndex = $j;
                }
            }

            if ($minIndex != $i) {
                // Swap $arr[$i] and $arr[$minIndex]
                $temp = $arr[$i];
                $arr[$i] = $arr[$minIndex];
                $arr[$minIndex] = $temp;
            }
        }

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
            echo "<div class='result'>";
            echo "<p class='original'>Original numbers: " . implode(", ", $numbersArray) . "</p>";
            $sortedNumbers = selectionSort($numbersArray);
            echo "<p class='sorted'>Sorted numbers: " . implode(", ", $sortedNumbers) . "</p>";
            echo "</div>";
        } else {
            echo "<p>Please enter a valid list of numbers.</p>";
        }
    }
    ?>
</body>
</html>
