<?php include "config.php";
       session_start(); ?>
<?php include "header.php"; ?>
<?php require "bootstrap.php"; ?>

<link rel="stylesheet" href="styles.css">

<script type="text/javascript" src="scripts.js"></script>

<style>
@media screen and  (max-width: 675px) {
  h3 { display: none; }  

</style>

<body>
    <div class="col-md-3"></div>
    <div class="col-md-6 well pt-5">
        <h3 class="text-primary">CAPTURE THE MOMENT</h3>
        <hr style="border-top:1px dotted #ccc;" />
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <?php if(isset($_SESSION['message'])): ?>
            <div class="alert alert-<?php echo $_SESSION['message']['alert'] ?> msg"><?php echo $_SESSION['message']['text'] ?></div>
            <script>
                (function () {
                    // removing the message 3 seconds after the page load
                    setTimeout(function () {
                        document.querySelector('.msg').remove();
                    }, 3000)
                })();
            </script>
            <?php
            endif;
            // clearing the message
            unset($_SESSION['message']);
            ?>
            <form action="login_query.php" method="POST">
                <h4 class="text-success">Login here...</h4>
                <hr style="border-top:1px groovy #000;">
                <div class="form-group text-primary">
                    <label>Username</label>
                    <input type="text" class="form-control" name="username" />
                </div>
                <div class="form-group text-primary">
                    <label>Password</label>
                    <input type="password" class="form-control" name="password" />
                </div>
                <br />
                <div class="form-group">
                    <button class="btn btn-primary form-control" name="login">Login</button>
                </div>
                <a href="registration.php">Registration</a>
            </form>
        </div>
    </div>

  

</body>
</html>


<?php include "footer.php"; ?>
