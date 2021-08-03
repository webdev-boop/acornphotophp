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
    .card-1, .card-2, .card-3 {
        background: linear-gradient(rgba(0,0,0, .6), rgba(0,0,0, .5)), url(images/pricing-card-bg.jpeg) no-repeat center /cover;
        box-shadow: 7px 18px 50px #555;
        max-width: 400px;
    }

    .card-list-item {
        border-bottom: 1px groove #eee;
        width: 55%;
        margin: auto;
    }

    .price-card-button {
        background-color: #f5593d;
        width: 130px;
        border-radius: 25px;
        box-shadow: 5px 8px 18px #000;
        transition: all .2s;
    }

        .price-card-button:hover {
            background-color: #f9793d;
            transform: translateY(-2px);
        }

    .moveFromLeft {
        animation-name: moveFromLeft;
        animation-duration: 2s;
    }

    .moveFromRight {
        animation-name: moveFromRight;
        animation-duration: 2s;
    }

    .moveFromBottom {
        animation-name: moveFromBottom;
        animation-duration: 2s;
    }

    @keyframes moveFromLeft {
        0% {
            transform: translateX(-100px);
            opacity: 0;
        }

        100% {
            transform: translateX(0);
            opacity: 1;
        }
    }

    @keyframes moveFromRight {
        0% {
            transform: translateX(100px);
            opacity: 0;
        }

        100% {
            transform: translateX(0);
            opacity: 1;
        }
    }

    @keyframes moveFromBottom {
        0% {
            transform: translateY(-100px);
            opacity: 0;
        }

        100% {
            transform: translateY(0);
            opacity: 1;
        }
    }
</style>
   
<section id="Pricing" class="pricing bg-light text-center p-5">
    <div class="container-fluid">
        <!-- title -->
        <div class="row text-muted text-center">
            <div class="col m-4">
                <h2 class="display-4 mb-4">Join Us</h2>
                <div class="underline-dark mb-4"></div>

            </div>
        </div>
        <!-- end of title -->
        <div class="row align-items-center">
            <div class="col-lg-4">
                <div class="card card-1 text-light py-4 my-4 mx-auto">
                    <div class="card-body">
                        <h5 class="text-uppercase font-weight-bold mb-5">Monthly Membership</h5>
                        <h2 class="display-4"><i class="fas fa-dollar-sign"></i> 19</h2>
                        <ul class="list-unstyled">
                            <li class="font-weight-bold py-3 card-list-item">Photoshop</li>
                            <li class="font-weight-bold py-3 card-list-item">After Effects</li>
                            <li class="font-weight-bold py-3 card-list-item">Graphics Design</li>
                            <li class="font-weight-bold py-3 card-list-item border-0">Video Montage </li>
                        </ul>
                        <a href="#" class="btn p-2 text-uppercase font-weight-bold price-card-button text-light">Sign Up!</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card card-2 text-light py-4 my-4 mx-auto">
                    <div class="card-body">
                        <h5 class="text-uppercase font-weight-bold mb-5">Unlimited Access</h5>
                        <h2 class="display-4"><i class="fas fa-dollar-sign"></i> 499</h2>
                        <ul class="list-unstyled">
                            <li class="font-weight-bold py-3 card-list-item">Photoshop</li>
                            <li class="font-weight-bold py-3 card-list-item">After Effects</li>
                            <li class="font-weight-bold py-3 card-list-item">Graphics Design</li>
                            <li class="font-weight-bold py-3 card-list-item">Video Montage </li>
                            <li class="font-weight-bold py-3 card-list-item border-0">Clip Making </li>
                        </ul>
                        <a href="#" class="btn p-2 text-uppercase font-weight-bold price-card-button text-light">Sign Up!</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card card-3 text-light py-4 my-4 mx-auto">
                    <div class="card-body">
                        <h5 class="text-uppercase font-weight-bold mb-5">Annual Membership</h5>
                        <h2 class="display-4"><i class="fas fa-dollar-sign"></i> 199</h2>
                        <ul class="list-unstyled">
                            <li class="font-weight-bold py-3 card-list-item">Photoshop</li>
                            <li class="font-weight-bold py-3 card-list-item">After Effects</li>
                            <li class="font-weight-bold py-3 card-list-item">Graphics Design</li>
                            <li class="font-weight-bold py-3 card-list-item border-0">Video Montage </li>
                        </ul>
                        <a href="#" class="btn p-2 text-uppercase font-weight-bold price-card-button text-light">Sign Up!</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="my-5">
            <h2 class="text-muted mb-4">Thanks for being with us!</h2>
            <i class="fas fa-coffee fa-3x"></i>
        </div>
    </div>
</section>
<?php include "footer.php"; ?>
