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
    <link rel="stylesheet" href="css/styles.css" />
    <script type="text/javascript" src="scripts.js"></script>

</head>
<style>
  
 .card-shadow {
    box-shadow: 5px 8px 20px #444;
    }

    .heading {
    position: absolute;
    top: 70%;
    right: 0;
    font-size: 14px;
    letter-spacing: 1px;
    background-color: #222;
    width: 70%;
    cursor: pointer;
    opacity: .7;
    transition: all .5s;
    }

    .heading:hover {
    opacity: 1;



</style>
<body>
    <section id="collection" class="collections bg-secondary py-4">
        <div class="container-fluid">
            <!-- title -->
            <div class="row text-light text-center">
                <div class="col m-4">
                    <h2 class="display-4 mb-4">Collection</h2>
                    <div class="underline mb-4"></div>

                </div>
            </div>
            <!-- end of title -->
            <div class="row">
                <div class="col-lg-4 col-sm-6 my-5">
                    <div class="card border-0 card-shadow">
                        <img src="https://res.cloudinary.com/ar26ar26/image/upload/v1626426030/acorn/pexels-photo-364255_e0zxoa.jpg" class="card-img" alt="">
                        <div class="card-img-overlay">
                            <h5 class="text-light text-uppercase font-weight-bold p-2 heading">Nature photography</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 my-5">
                    <div class="card border-0 card-shadow">
                        <img src="https://res.cloudinary.com/ar26ar26/image/upload/v1626426031/acorn/wedding_tpco34.jpg" class="card-img" alt="">
                        <div class="card-img-overlay">
                            <h5 class="text-light text-uppercase font-weight-bold p-2 heading">Wedding photography</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 my-5">
                    <div class="card border-0 card-shadow">
                        <img src="https://res.cloudinary.com/ar26ar26/image/upload/v1626426031/acorn/party_nfyqqp.jpg" class="card-img" alt="">
                        <div class="card-img-overlay">
                            <h5 class="text-light text-uppercase font-weight-bold p-2 heading">Party photography</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 my-5">
                    <div class="card border-0 card-shadow">
                        <img src="https://res.cloudinary.com/ar26ar26/image/upload/v1626426029/acorn/business_jq1uvx.jpg" class="card-img" alt="">
                        <div class="card-img-overlay">
                            <h5 class="text-light text-uppercase font-weight-bold p-2 heading">Business photography</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 my-5">
                    <div class="card border-0 card-shadow">
                        <img src="https://res.cloudinary.com/ar26ar26/image/upload/v1626426029/acorn/fashion_v8vcec.jpg" class="card-img" alt="">
                        <div class="card-img-overlay">
                            <h5 class="text-light text-uppercase font-weight-bold p-2 heading">Fashion photography</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 my-5">
                    <div class="card border-0 card-shadow">
                        <img src="https://res.cloudinary.com/ar26ar26/image/upload/v1626426029/acorn/family_icoml0.jpg" class="card-img" alt="">
                        <div class="card-img-overlay">
                            <h5 class="text-light text-uppercase font-weight-bold p-2 heading">Family photography</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
<?php include "footer.php"; ?>
