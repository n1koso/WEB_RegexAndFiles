<?php

if (!isset($_POST["Name"]) || !isset($_POST["Surname"]) || !isset($_POST["Age"])) {
    http_response_code(400);
    return;
}

if (!session_start()) {
    http_response_code(500);
    return;
}
$_SESSION["Name"] = $_POST["Name"];
$_SESSION["Surname"] = $_POST["Surname"];
$_SESSION["Age"] = $_POST["Age"];
header("Refresh:3; url=Begining.php");