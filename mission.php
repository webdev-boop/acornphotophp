<!DOCTYPE html>
<?php
	require 'config.php';
	session_start(); ?>
<?php include "header.php"; ?>
<?php require "bootstrap.php"; 
?>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
    <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="css/styles.css"/>
    <script type="text/javascript" src="scripts.js"></script>
    
</head>
<style>
   
    body {
    background: #1B0E0E;
    }

    #Mission {
    margin-bottom: -55px;
    padding-bottom: 0px;
    }
</style>


<body>
  
<section id="Mission" class="Mission">
    <div class="container-fluid">
        <!-- title -->
        <div class="row text-light text-center">
            <div class="col m-4">
                <h3 class="display-4 pt-5">Our Mission</h3>
                <div class="underline mb-4"></div>
                <p class="lead">Photography is an art, a science and a way of life. It’s also our business. </p>
            </div>
        </div>
        <!-- end of title -->
        <div class="row my-5">
            <div class="col-md-4 text-center">
                <i class="fa fa-cogs fa-3x text-danger mb-4"></i>
                <h2 class="text-light mb-3">Creativity</h2>

            </div>
            <div class="col-md-4 text-center">
                <i class="far fa-thumbs-up fa-3x text-danger mb-4"></i>
                <h2 class="text-light mb-3">Quality</h2>

            </div>
            <div class="col-md-4 text-center">
                <i class="far fa-handshake fa-3x text-danger mb-4"></i>
                <h2 class="text-light mb-3">Experience</h2>

            </div>
        </div>
    </div>
    <div class="container mb-5">
        <div class="row align-items-center">
            <div class="col-lg-5 text-center">
                <img src="https://res.cloudinary.com/ar26ar26/image/upload/v1626426030/acorn/hand-1030563_1280_yyveby.webp" width="350" class="img-fluid camera-img" alt="">
            </div>
            <div class="col-lg-7 text-light text-lg-right text-center mission-text my-5">
                <h2>We know what we do</h2>

            </div>
        </div>
    </div>
</section>
    
</body>
<?php include "footer.php"; ?>
