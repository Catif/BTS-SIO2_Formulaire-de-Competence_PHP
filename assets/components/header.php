<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $titre ?></title>
    <link rel="stylesheet" href="<?= HTML_ROOT ?>/assets/css/style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins">
</head>
<body>

<?php 
    if($_SESSION['role'] != 'visitor'){
        require PHP_ROOT . '/assets/components/navbar.php';
    }
?>



<div id='<?= $map['divId'] ?>' class="container<?= ($_SESSION['role'] != 'visitor') ? ' panel' : '' ?>">