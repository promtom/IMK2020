<?php require 'source/about.php' ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IMK</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="asset/css/bootstrap.css">
    <!-- fontasmoe CSS -->
    <link rel="stylesheet" href="asset/fontawesome-5/css/all.min.css">
    <!-- CSS sendiri -->
    <link rel="stylesheet" href="asset/css/style.css">
    <link rel="stylesheet" href="asset/css/font.css">
</head>
<body>

    <!-- MULAI NAVBAR -->
    <?php 
        require('layout/nav/navbar.php');
    ?>
    <!-- AKHIR NAVBAR -->

    <!-- MENU -->
    <?php require('controller/menu.php') ?>
    <!-- MENU -->

    <!-- MEDIA FOOTER -->
    <?php require('layout/nav/footer.php') ?>
    <!-- AKHIR MEDIA FOOTER -->


    <!-- Jquery -->
    <script src="asset/js/jquery.js"></script>
    <!-- Bootstrap Min -->
    <script src="asset/js/bootstrap.min.js"></script>
</body>
</html>