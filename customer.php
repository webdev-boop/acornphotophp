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
   section {
margin-bottom: -120px;
padding-bottom: 0;
}
</style>

<body>
<script>
 $(window).scroll(function() {
        let position = $(this).scrollTop();
        if(position >= 4300 ) {
            $(".card-1").addClass("moveFromLeft");
            $(".card-2").addClass("moveFromBottom");
            $(".card-3").addClass("moveFromRight");
        } else {
            $(".card-1").removeClass("moveFromLeft");
            $(".card-2").removeClass("moveFromBottom");
            $(".card-3").removeClass("moveFromRight");
        }
    });
});
</script>
<section id="Customer" class="customers p-5">
    <div class="container-fluid">
        <!-- title -->
        <div class="row text-light text-center">
            <div class="col m-4">
                <h2 class="display-4 mb-4">Happy Customers</h2>
                <div class="underline mb-4"></div>

            </div>
        </div>
        <!-- end of title -->
        <div class="row">
            <div class="col-md-6 mx-auto">
                <div class="carousel slide" data-ride="carousel" id="customer-carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#customer-carousel" data-slide-to="0" class="active"></li>
                        <li data-target="#customer-carousel" data-slide-to="1"></li>
                        <li data-target="#customer-carousel" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active text-center">
                            <img src="https://res.cloudinary.com/ar26ar26/image/upload/v1626426030/acorn/240_f_281433227_vhkfublpksvwnxxl8tv3udigu52fs4id_avvz0x.webp" class="image-fluid rounded-circle m-5" alt="" width="150">
                            <blockquote class="blockquote text-white">
                                <p class="mb-5">Acorn photography was amazing!! I am so happy with all of the photos and the video of our wedding. The photographer and videographer were talented and professional. When I looked into these vendors I couldn't believe the value with the packages they offered. Everything was perfect! Book them! You won't be disappointed!</p>
                            </blockquote>
                            <h5 class="text-light text-uppercase font-weight-bold mb-3">Monica</h5>
                            <ul class="list-inline mb-5">
                                <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                            </ul>
                        </div>
                        <div class="carousel-item text-center">
                            <img src="https://res.cloudinary.com/ar26ar26/image/upload/v1626426029/acorn/240_f_266317554_kr7dpoom5uty0ycefu9ndztt4a2lemjf_o07pwp.webp" alt="" width="150">
                            <blockquote class="blockquote text-white">
                                <p class="mb-5">If you are looking for a more affordable option with great packages and photographers, Acorn Photography is for you. They were very responsive and the pictures turned out amazing. You also get all of the pictures taken that night along with full printing rights! </p>
                            </blockquote>
                            <h5 class="text-light text-uppercase font-weight-bold mb-3">Jhon</h5>
                            <ul class="list-inline mb-5">
                                <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                            </ul>
                        </div>
                        <div class="carousel-item text-center">
                            <img src="https://res.cloudinary.com/ar26ar26/image/upload/v1626426029/acorn/240_f_232879585_vrjtacafvzhruep8fh8k5ehrkothus4g_olggf6.webp" class="image-fluid rounded-circle m-5" alt="" width="150">
                            <blockquote class="blockquote text-white">
                                <p class="mb-5">Acorn Photography was very easy to work with and accommodated my last-minute request for a shoot that was only a week away! They were prompt in  responses and they turned our edited corporate headshots around in record time. Our team never looked better!</p>
                            </blockquote>
                            <h5 class="text-light text-uppercase font-weight-bold mb-3">Bruce</h5>
                            <ul class="list-inline mb-5">
                                <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
</body>
<?php include "footer.php"; ?>
