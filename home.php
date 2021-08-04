<!DOCTYPE html>
<?php
	require 'config.php';
	session_start(); ?>
<?php include "header.php"; ?>
<?php require "bootstrap.php"; ?>

	if(!ISSET($_SESSION['user'])){
		header('location:index.php');
	}
?>
<html lang="en">
<head>
   <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1" />
</head>
<style>
body {
  padding-bottom: 0px !important;
  margin-bottom: -40px !important;
}
</style>

<body>
    <div class="col-md-3"></div>
    <div class="col-md-6 well">
        
        <hr style="border-top:1px dotted #2B1919;" />
        <div class="col-md-2"></div>
        <div class="col-md-8 text-light">
            <h4>Welcome!</h4>
            <br />
            <?php
            $id = $_SESSION['user'];
            $sql = $conn->prepare("SELECT * FROM `member` WHERE `mem_id`='$id'");
            $sql->execute();
            $fetch = $sql->fetch();
            ?>
            <center><h4><?php echo $fetch['firstname']." ". $fetch['lastname']?></h4></center>
            <a href="logout.php">Logout</a>
        </div>
    </div>

    <div class="hero-image">
        <div class="hero-text">         
            <h3>When people look at our pictures we want them to feel the way they do when they want to read a line of a poem twice.</h3>
            

        </div>
    </div>


</body>
<?php include "footer.php"; ?>
