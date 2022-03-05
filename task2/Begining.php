<?php

if (!isset($_SESSION["firstName"]) || !isset($_SESSION["lastName"]) || !isset($_SESSION["age"])) {
    http_response_code(401);
    echo "Unauthorized";
    return;
}

if (isset($_SESSION["Name"]) && isset($_SESSION["Surname"]) && isset($_SESSION["Age"])) {
    echo "Person: {$_SESSION['Name']} {$_SESSION['Surname']}. Age: {$_SESSION['Age']} ";
}