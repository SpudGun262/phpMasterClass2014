<?php include('functions.php') ?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php
        // check if metaTitle isset, if so echo metaTitle followed by - e.g. Blog Post - Blog Standard
        if (isset($metaTitle)){
            echo $metaTitle . ' - ';
        }
        echo $siteTitle ?></title>
</head>
<body>