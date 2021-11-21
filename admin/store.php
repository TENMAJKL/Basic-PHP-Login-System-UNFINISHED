<?php

session_start();

if($_SESSION["isloggedin"] > 0) {

    if($_SESSION["rank"] == "admin") {

        $username = $_SESSION["username"];
        $password = $_SESSION["password"];
        $kredit = $_SESSION["kredit"];
        $rank = $_SESSION["rank"];
        $id = $_SESSION["id"];

    } else {
        header("Location: ../auth/login.php");
    }
} else {
    header("Location: ../auth/login.php");
}

?>