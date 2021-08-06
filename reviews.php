<!DOCTYPE html>
<?php
	require 'config.php';
	session_start(); ?>
<?php include "header.php"; ?>
<?php require "bootstrap.php";
?>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
    <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="css/styles.css" />
    <script type="text/javascript" src="scripts.js"></script>

</head>

<style>
    body {
        background: #372020;
    }
    #Reviews {
        margin-bottom: -25px;
        padding-bottom: 0;
    }


</style>

<body>
    <section class="Reviews" id="Reviews">
        <div class="container-fluid">
    
        <!-- title -->
        <div class="row text-light text-center mt-5">
            <div class="col m-4">
                <h2 class="display-4 mb-4">Happy Customers</h2>
                <div class="underline mb-4"></div>

            </div>
        </div>


        <div class="container">
        <div class="row">
        <div class="col-md-4 text-center text-light">
        <img src="https://res.cloudinary.com/ar26ar26/image/upload/v1626426030/acorn/240_f_281433227_vhkfublpksvwnxxl8tv3udigu52fs4id_avvz0x.webp" class="image-fluid rounded-circle m-5" alt="" width="150">
       
        <p>Acorn photography was amazing!! I am so happy with all of the photos and the video of our wedding. The photographer and videographer were talented and professional. When I looked into these vendors I couldn't believe the value with the packages they offered. Everything was perfect! Book them! You won't be disappointed!</p>
        
        <h5 class="text-light text-uppercase font-weight-bold mb-5">Monica</h5>
        </div>

       
        <div class="col-md-4 text-center text-light">
        <img src="https://res.cloudinary.com/ar26ar26/image/upload/v1626426029/acorn/240_f_266317554_kr7dpoom5uty0ycefu9ndztt4a2lemjf_o07pwp.webp" class="image-fluid rounded-circle m-5" alt="" width="150">
        
        <p>If you are looking for a more affordable option with great packages and photographers, Acorn Photography is for you. They were very responsive and the pictures turned out amazing. You also get all of the pictures taken that night along with full printing rights! </p>
       
        <h5 class="text-light text-uppercase font-weight-bold mb-3">Jhon</h5>
        </div>

        
        <div class="col-md-4 text-center text-light">
        <img src="https://res.cloudinary.com/ar26ar26/image/upload/v1626426029/acorn/240_f_232879585_vrjtacafvzhruep8fh8k5ehrkothus4g_olggf6.webp" class="image-fluid rounded-circle m-5" alt="" width="150">
        <p>Acorn Photography was very easy to work with and accommodated my last-minute request for a shoot that was only a week away! They were prompt in  responses and they turned our edited corporate headshots around in record time. Our team never looked better!</p>
        <h5 class="text-light text-uppercase font-weight-bold mb-3">Bruce</h5>        
        </div>

      </div>
    </section>
</body>

<?php include "footer.php"; ?>