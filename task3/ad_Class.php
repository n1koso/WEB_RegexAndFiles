<?php

namespace crt;

$categories = opendir('categories');
$allcategories = [];
$adsDict = [];
while ($categoryName = readdir($categories)) {
    if (is_dir('categories/' . $categoryName) && $categoryName != '.' && $categoryName != '..') {
        $allcategories[] = $categoryName;
        $adsDict[$categoryName] = [];
    }
}

foreach ($allcategories as $categoryName) {
    $categoryDir = opendir('categories/' . $categoryName);
    while ($fileName = readdir($categoryDir)) {
        if ($fileName != '.' && $fileName != '..') {
            $filePathName = 'categories/' . $categoryName . '/' . $fileName;
            $file = fopen($filePathName, 'r');
            $title = substr($fileName, 0, strlen($fileName) - 4);
            $email = fgets($file);
            $text = "";
            while (!feof($file)) {
                $text .= fgets($file) . "<br>";
            }
            fclose($file);
            $adsDict[$categoryName][] = ['title' => $title, 'email' => $email, 'text' => $text];
        }
    }
}