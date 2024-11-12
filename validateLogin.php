<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];

    if ($email === "estebanstarman75@gmail.com" && $password === "1234") {
        header("Location:dashboard.php");
    } else {
        header("Location:error.php");
    }
}
