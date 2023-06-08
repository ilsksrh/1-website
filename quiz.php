<!DOCTYPE html>
<?php
date_default_timezone_set('Asia/Almaty');
?>

<head>
    <title>Simple Test</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f1f1f1;
        }

        h1 {
            color: #333;
            text-align: center;
        }

        form {
            max-width: 500px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        h2 {
            color: #ec1c1c;
        }

        p {
            margin-bottom: 10px;
        }

        input[type="radio"] {
            margin-bottom: 10px;
        }

        button {
            display: block;
            width: 100%;
            padding: 10px;
            background-color: #4CAF50;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
<h1>Simple Test</h1>
<form method="post" action="save_results.php">
    <input type="hidden" name="test_date" value="<?php echo date('Y-m-d H:i:s'); ?>">

    <h2>Question 1:</h2>
    <p>What is the capital of France?</p>
    <input type="radio" name="q1" value="a"> a) Paris<br>
    <input type="radio" name="q1" value="b"> b) London<br>
    <input type="radio" name="q1" value="c"> c) Rome<br>
    <input type="radio" name="q1" value="d"> d) Madrid<br>

    <h2>Question 2:</h2>
    <p>Which planet is known as the Red Planet?</p>
    <input type="radio" name="q2" value="a"> a) Mars<br>
    <input type="radio" name="q2" value="b"> b) Jupiter<br>
    <input type="radio" name="q2" value="c"> c) Saturn<br>
    <input type="radio" name="q2" value="d"> d) Venus<br>

    <h2>Question 3:</h2>
    <p>Who painted the Mona Lisa?</p>
    <input type="radio" name="q3" value="a"> a) Leonardo da Vinci<br>
    <input type="radio" name="q3" value="b"> b) Pablo Picasso<br>
    <input type="radio" name="q3" value="c"> c) Vincent van Gogh<br>
    <input type="radio" name="q3" value="d"> d) Claude Monet<br>

    <h2>Question 4:</h2>
    <p>What is the chemical symbol for gold?</p>
    <input type="radio" name="q4" value="a"> a) Ag<br>
    <input type="radio" name="q4" value="b"> b) Au<br>
    <input type="radio" name="q4" value="c"> c) Cu<br>
    <input type="radio" name="q4" value="d"> d) Fe<br>

    <h2>Question 5:</h2>
    <p>Which country is home to the kangaroo?</p>
    <input type="radio" name="q5" value="a"> a) Australia<br>
    <input type="radio" name="q5" value="b"> b) Canada<br>
    <input type="radio" name="q5" value="c"> c) Brazil<br>
    <input type="radio" name="q5" value="d"> d) South Africa<br>
    <br>
    <button type="submit" id = "save" value="Submit">Submit </button>
</form>
</body>
</html>