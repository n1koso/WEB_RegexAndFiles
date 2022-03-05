<?php

$response = "";
$response .= "<ul>";
foreach ($_SESSION as $key => $value)
    $response .= "<li>" . $key . "=" . $value;
$response .= "</ul>";
echo $response;