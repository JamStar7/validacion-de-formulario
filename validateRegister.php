<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    if ($name === "junior" && $email === "estebanstar75@gmail.com" && $password === "1234") {
        header("Location:dashboard.php");
    } else {
        header("Location:error.php");
    }
}









































