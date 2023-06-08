<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];
    $name = $_POST["name"];
    $surname = $_POST["surname"];
    $date = $_POST["date"];
    $file = fopen("users.txt", "a");
    fwrite($file, "$username,$password,$name,$surname,$date\n");
    header("Location: Login.html");
}