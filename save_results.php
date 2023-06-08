<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $testDate = $_POST['test_date'];
    $username = $_COOKIE['username'];
    $answers = [
        $_POST['q1'],
        $_POST['q2'],
        $_POST['q3'],
        $_POST['q4'],
        $_POST['q5']
    ];
    $correctAnswers = 0;
    $correctOptions = ['a', 'a', 'a', 'b', 'a']; // Update with the correct answers
    for ($i = 0; $i < count($answers); $i++) {
        if ($answers[$i] === $correctOptions[$i]) {
            $correctAnswers++;
        }
    }

    $file = fopen("test_results.txt", "a");
    fwrite($file, "$username,$testDate," . implode(",", $answers) . ",$correctAnswers\n");
    header("Location: results_page.php");
    fclose($file);
}
