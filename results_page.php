<!DOCTYPE html>
<html>
<head>
    <title>Quiz Results</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f1f1f1;
        }

        h1, h2 {
            text-align: center;
        }

        .results-container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .result-item {
            margin-bottom: 10px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #f9f9f9;
        }

        .result-item p {
            margin: 0;
        }

        .message {
            text-align: center;
            margin-bottom: 20px;
        }

        .btn {
            display: inline-block;
            padding: 10px 20px;
            background-color: #4CAF50;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        .btn:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
<div class="results-container">
    <?php
    $username = $_COOKIE['username'];

    $file = fopen("test_results.txt", "r");
    if ($file) {
        echo "<h2>$username's Quiz Results:</h2>";

        $foundResults = false;
        $score = 0;
        while (($line = fgets($file)) !== false) {
            $fields = explode(",", $line);
            if ($fields[0] === $username) {
                $date = $fields[1];
                $score = intval($fields[count($fields) - 1]);
                echo '<div class="result-item">';
                echo "<p>Date: $date</p>";
                echo "<p>Score: $score</p>";
                echo '</div>';
                $foundResults = true;
            }
        }

        if (!$foundResults) {
            echo "<p>No quiz results found.</p>";
        } else {
            if ($score === 5) {
                echo '<div class="message">';
                echo "Great! Now you have a 15% discount!";
                echo '</div>';
            } else {
                echo '<div class="message">';
                echo "Unfortunately, you made mistakes, so we can't give you a discount.";
                echo '</div>';
            }
            echo '<div class="message">';
            echo '<a href="price.php" class="btn">Fine</a>';
            echo '</div>';
        }

        fclose($file);
    } else {
        echo "Error: Unable to open file.";
    }
    ?>
</div>
</body>
</html>
